<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fastScheduling;

use AlibabaCloud\Tea\Model;

class schedulingUsers extends Model
{
    /**
     * @description 排班顺序
     *
     * @var int
     */
    public $schedulingOrder;

    /**
     * @description 轮班用户ID
     *
     * @var int
     */
    public $schedulingUserId;
    protected $_name = [
        'schedulingOrder'  => 'schedulingOrder',
        'schedulingUserId' => 'schedulingUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
        }
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulingUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }

        return $model;
    }
}
