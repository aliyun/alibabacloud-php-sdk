<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultResponseBody;

use AlibabaCloud\Tea\Model;

class preCheckItems extends Model
{
    /**
     * @var preCheckItems\preCheckItems[]
     */
    public $preCheckItems;
    protected $_name = [
        'preCheckItems' => 'PreCheckItems',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckItems) {
            $res['PreCheckItems'] = [];
            if (null !== $this->preCheckItems && \is_array($this->preCheckItems)) {
                $n = 0;
                foreach ($this->preCheckItems as $item) {
                    $res['PreCheckItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckItems'])) {
            if (!empty($map['PreCheckItems'])) {
                $model->preCheckItems = [];
                $n = 0;
                foreach ($map['PreCheckItems'] as $item) {
                    $model->preCheckItems[$n++] = null !== $item ? preCheckItems\preCheckItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
