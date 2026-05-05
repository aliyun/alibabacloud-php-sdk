<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponseBody\data;

use AlibabaCloud\Dara\Model;

class usages extends Model
{
    /**
     * @var int
     */
    public $consumeSecond;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'consumeSecond' => 'ConsumeSecond',
        'period' => 'Period',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeSecond) {
            $res['ConsumeSecond'] = $this->consumeSecond;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ConsumeSecond'])) {
            $model->consumeSecond = $map['ConsumeSecond'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
