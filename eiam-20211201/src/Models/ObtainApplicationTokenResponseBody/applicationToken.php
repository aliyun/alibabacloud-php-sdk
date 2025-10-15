<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationTokenResponseBody;

use AlibabaCloud\Dara\Model;

class applicationToken extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationToken;

    /**
     * @var string
     */
    public $applicationTokenId;

    /**
     * @var string
     */
    public $applicationTokenType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastUsedTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationToken' => 'ApplicationToken',
        'applicationTokenId' => 'ApplicationTokenId',
        'applicationTokenType' => 'ApplicationTokenType',
        'createTime' => 'CreateTime',
        'expirationTime' => 'ExpirationTime',
        'instanceId' => 'InstanceId',
        'lastUsedTime' => 'LastUsedTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationToken) {
            $res['ApplicationToken'] = $this->applicationToken;
        }

        if (null !== $this->applicationTokenId) {
            $res['ApplicationTokenId'] = $this->applicationTokenId;
        }

        if (null !== $this->applicationTokenType) {
            $res['ApplicationTokenType'] = $this->applicationTokenType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastUsedTime) {
            $res['LastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationToken'])) {
            $model->applicationToken = $map['ApplicationToken'];
        }

        if (isset($map['ApplicationTokenId'])) {
            $model->applicationTokenId = $map['ApplicationTokenId'];
        }

        if (isset($map['ApplicationTokenType'])) {
            $model->applicationTokenType = $map['ApplicationTokenType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastUsedTime'])) {
            $model->lastUsedTime = $map['LastUsedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
