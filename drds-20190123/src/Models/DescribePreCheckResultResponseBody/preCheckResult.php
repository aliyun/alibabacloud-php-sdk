<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult\subCheckItems;

class preCheckResult extends Model
{
    /**
     * @var string
     */
    public $preCheckName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var subCheckItems[]
     */
    public $subCheckItems;
    protected $_name = [
        'preCheckName' => 'PreCheckName',
        'state' => 'State',
        'subCheckItems' => 'SubCheckItems',
    ];

    public function validate()
    {
        if (\is_array($this->subCheckItems)) {
            Model::validateArray($this->subCheckItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheckName) {
            $res['PreCheckName'] = $this->preCheckName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->subCheckItems) {
            if (\is_array($this->subCheckItems)) {
                $res['SubCheckItems'] = [];
                $n1 = 0;
                foreach ($this->subCheckItems as $item1) {
                    $res['SubCheckItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PreCheckName'])) {
            $model->preCheckName = $map['PreCheckName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubCheckItems'])) {
            if (!empty($map['SubCheckItems'])) {
                $model->subCheckItems = [];
                $n1 = 0;
                foreach ($map['SubCheckItems'] as $item1) {
                    $model->subCheckItems[$n1] = subCheckItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
