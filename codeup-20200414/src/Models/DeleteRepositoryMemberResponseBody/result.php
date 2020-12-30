<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var int
     */
    public $notificationLevel;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'userId'            => 'UserId',
        'sourceType'        => 'SourceType',
        'createdAt'         => 'CreatedAt',
        'message'           => 'Message',
        'accessLevel'       => 'AccessLevel',
        'updatedAt'         => 'UpdatedAt',
        'sourceId'          => 'SourceId',
        'notificationLevel' => 'NotificationLevel',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->notificationLevel) {
            $res['NotificationLevel'] = $this->notificationLevel;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['NotificationLevel'])) {
            $model->notificationLevel = $map['NotificationLevel'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
