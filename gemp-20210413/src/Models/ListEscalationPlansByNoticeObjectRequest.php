<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListEscalationPlansByNoticeObjectRequest extends Model
{
    /**
     * @var int
     */
    public $noticeObjectId;

    /**
     * @var int
     */
    public $noticeObjectType;
    protected $_name = [
        'noticeObjectId'   => 'noticeObjectId',
        'noticeObjectType' => 'noticeObjectType',
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
        if (null !== $this->noticeObjectType) {
            $res['noticeObjectType'] = $this->noticeObjectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEscalationPlansByNoticeObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['noticeObjectId'])) {
            $model->noticeObjectId = $map['noticeObjectId'];
        }
        if (isset($map['noticeObjectType'])) {
            $model->noticeObjectType = $map['noticeObjectType'];
        }

        return $model;
    }
}
