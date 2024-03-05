<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes;

use AlibabaCloud\Tea\Model;

class orderNode extends Model
{
    /**
     * @var string
     */
    public $payTime;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'payTime' => 'payTime',
        'uid'     => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payTime) {
            $res['payTime'] = $this->payTime;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['payTime'])) {
            $model->payTime = $map['payTime'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
