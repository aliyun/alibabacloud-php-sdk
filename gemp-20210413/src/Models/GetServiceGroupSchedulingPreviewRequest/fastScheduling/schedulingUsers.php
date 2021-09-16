<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fastScheduling;

use AlibabaCloud\Tea\Model;

class schedulingUsers extends Model
{
    /**
     * @description 轮班用户ID
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @description 排班顺序
     *
     * @var int
     */
    public $schedulingOrder;
    protected $_name = [
        'schedulingUserId' => 'schedulingUserId',
        'schedulingOrder'  => 'schedulingOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
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
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }

        return $model;
    }
}
