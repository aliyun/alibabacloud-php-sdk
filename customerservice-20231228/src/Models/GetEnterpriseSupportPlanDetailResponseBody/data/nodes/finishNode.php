<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes;

use AlibabaCloud\Tea\Model;

class finishNode extends Model
{
    /**
     * @var string
     */
    public $finishTime;
    protected $_name = [
        'finishTime' => 'finishTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return finishNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        return $model;
    }
}
