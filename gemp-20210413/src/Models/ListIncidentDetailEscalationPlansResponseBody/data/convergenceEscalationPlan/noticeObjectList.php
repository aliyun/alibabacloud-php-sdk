<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\convergenceEscalationPlan;

use AlibabaCloud\Tea\Model;

class noticeObjectList extends Model
{
    /**
     * @example 31231
     *
     * @var int
     */
    public $noticeObjectId;

    /**
     * @example 小华
     *
     * @var string
     */
    public $noticeObjectName;

    /**
     * @example 130xxxxxxxxx
     *
     * @var string
     */
    public $noticeObjectPhone;
    protected $_name = [
        'noticeObjectId'    => 'noticeObjectId',
        'noticeObjectName'  => 'noticeObjectName',
        'noticeObjectPhone' => 'noticeObjectPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noticeObjectId) {
            $res['noticeObjectId'] = $this->noticeObjectId;
        }
        if (null !== $this->noticeObjectName) {
            $res['noticeObjectName'] = $this->noticeObjectName;
        }
        if (null !== $this->noticeObjectPhone) {
            $res['noticeObjectPhone'] = $this->noticeObjectPhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noticeObjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['noticeObjectId'])) {
            $model->noticeObjectId = $map['noticeObjectId'];
        }
        if (isset($map['noticeObjectName'])) {
            $model->noticeObjectName = $map['noticeObjectName'];
        }
        if (isset($map['noticeObjectPhone'])) {
            $model->noticeObjectPhone = $map['noticeObjectPhone'];
        }

        return $model;
    }
}
