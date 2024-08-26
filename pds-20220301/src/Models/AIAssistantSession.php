<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AIAssistantSession extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var int
     */
    public $expiredAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientId'     => 'client_id',
        'createdAt'    => 'created_at',
        'customLabels' => 'custom_labels',
        'domainId'     => 'domain_id',
        'expiredAt'    => 'expired_at',
        'name'         => 'name',
        'sessionId'    => 'session_id',
        'status'       => 'status',
        'updatedAt'    => 'updated_at',
        'userId'       => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->expiredAt) {
            $res['expired_at'] = $this->expiredAt;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIAssistantSession
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['custom_labels'])) {
            if (!empty($map['custom_labels'])) {
                $model->customLabels = $map['custom_labels'];
            }
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['expired_at'])) {
            $model->expiredAt = $map['expired_at'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
