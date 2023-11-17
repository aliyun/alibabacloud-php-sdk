<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponseBody\data\chatContexts;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $releaseReason;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'index'            => 'Index',
        'releaseInitiator' => 'ReleaseInitiator',
        'releaseReason'    => 'ReleaseReason',
        'skillGroupId'     => 'SkillGroupId',
        'status'           => 'Status',
        'userId'           => 'UserId',
        'userType'         => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }
        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }
        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
