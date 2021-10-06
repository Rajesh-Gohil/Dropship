<?php

namespace MageGohil\Checkout\Ui\Component\Listing\Column\Dropship;

class Options implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        $options = [];
        $statuses = \MageGohil\Checkout\Model\Status::getStatuses();
        foreach ($statuses as $value => $label) {
            $options[] = ['value' => $value, 'label' => $label];
        }

        return $options;
    }
}
