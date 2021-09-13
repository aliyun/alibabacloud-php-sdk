<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListOutboundNumbersOfUserRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $skillGroupIdList;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'userId'           => 'UserId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOutboundNumbersOfUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SkillGroupIdList'])) {
            $model->skillGroupIdList = $map['SkillGroupIdList'];
        }

        return $model;
    }
}
