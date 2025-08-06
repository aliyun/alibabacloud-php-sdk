<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenResponseBody;

use AlibabaCloud\Dara\Model;

class domainProxyToken extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainProxyToken;

    /**
     * @var string
     */
    public $domainProxyTokenId;

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

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'domainId' => 'DomainId',
        'domainProxyToken' => 'DomainProxyToken',
        'domainProxyTokenId' => 'DomainProxyTokenId',
        'instanceId' => 'InstanceId',
        'lastUsedTime' => 'LastUsedTime',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->domainProxyToken) {
            $res['DomainProxyToken'] = $this->domainProxyToken;
        }

        if (null !== $this->domainProxyTokenId) {
            $res['DomainProxyTokenId'] = $this->domainProxyTokenId;
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

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['DomainProxyToken'])) {
            $model->domainProxyToken = $map['DomainProxyToken'];
        }

        if (isset($map['DomainProxyTokenId'])) {
            $model->domainProxyTokenId = $map['DomainProxyTokenId'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
