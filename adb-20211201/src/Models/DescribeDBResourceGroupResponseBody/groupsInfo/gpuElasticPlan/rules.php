<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo\gpuElasticPlan;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $endCronExpression;

    /**
     * @var string
     */
    public $startCronExpression;
    protected $_name = [
        'endCronExpression' => 'EndCronExpression',
        'startCronExpression' => 'StartCronExpression',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endCronExpression) {
            $res['EndCronExpression'] = $this->endCronExpression;
        }

        if (null !== $this->startCronExpression) {
            $res['StartCronExpression'] = $this->startCronExpression;
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
        if (isset($map['EndCronExpression'])) {
            $model->endCronExpression = $map['EndCronExpression'];
        }

        if (isset($map['StartCronExpression'])) {
            $model->startCronExpression = $map['StartCronExpression'];
        }

        return $model;
    }
}
