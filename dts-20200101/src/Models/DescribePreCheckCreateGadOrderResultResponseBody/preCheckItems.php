<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultResponseBody\preCheckItems\preCheckItems;

class preCheckItems extends Model
{
    /**
     * @var preCheckItems[]
     */
    public $preCheckItems;
    protected $_name = [
        'preCheckItems' => 'PreCheckItems',
    ];

    public function validate()
    {
        if (\is_array($this->preCheckItems)) {
            Model::validateArray($this->preCheckItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheckItems) {
            if (\is_array($this->preCheckItems)) {
                $res['PreCheckItems'] = [];
                $n1 = 0;
                foreach ($this->preCheckItems as $item1) {
                    $res['PreCheckItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckItems'])) {
            if (!empty($map['PreCheckItems'])) {
                $model->preCheckItems = [];
                $n1 = 0;
                foreach ($map['PreCheckItems'] as $item1) {
                    $model->preCheckItems[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
