<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponseBody\data\nodes;

use AlibabaCloud\Dara\Model;

class freeOrderNode extends Model
{
    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'applyTime' => 'applyTime',
        'uid' => 'uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
