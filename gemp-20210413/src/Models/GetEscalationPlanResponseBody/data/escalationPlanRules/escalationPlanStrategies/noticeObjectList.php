<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanStrategies;

use AlibabaCloud\Tea\Model;

class noticeObjectList extends Model
{
    /**
     * @example 234
     *
     * @var int
     */
    public $noticeObjectId;

    /**
     * @example 张老三
     *
     * @var string
     */
    public $noticeObjectName;
    protected $_name = [
        'noticeObjectId'   => 'noticeObjectId',
        'noticeObjectName' => 'noticeObjectName',
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

        return $model;
    }
}
