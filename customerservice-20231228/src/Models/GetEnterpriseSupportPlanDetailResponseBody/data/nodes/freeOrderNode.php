<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes;

use AlibabaCloud\Tea\Model;

class freeOrderNode extends Model
{
    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'applyTime' => 'applyTime',
        'uid'       => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['applyTime'] = $this->applyTime;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return freeOrderNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyTime'])) {
            $model->applyTime = $map['applyTime'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
