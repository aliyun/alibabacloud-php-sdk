<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetProxyResponseBody extends Model
{
    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $httpsPort;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $privateEnable;

    /**
     * @var string
     */
    public $privateHost;

    /**
     * @var int
     */
    public $protocolPort;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $proxyId;

    /**
     * @var bool
     */
    public $publicEnable;

    /**
     * @var string
     */
    public $publicHost;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'creatorId'     => 'CreatorId',
        'creatorName'   => 'CreatorName',
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'httpsPort'     => 'HttpsPort',
        'instanceId'    => 'InstanceId',
        'privateEnable' => 'PrivateEnable',
        'privateHost'   => 'PrivateHost',
        'protocolPort'  => 'ProtocolPort',
        'protocolType'  => 'ProtocolType',
        'proxyId'       => 'ProxyId',
        'publicEnable'  => 'PublicEnable',
        'publicHost'    => 'PublicHost',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->privateEnable) {
            $res['PrivateEnable'] = $this->privateEnable;
        }
        if (null !== $this->privateHost) {
            $res['PrivateHost'] = $this->privateHost;
        }
        if (null !== $this->protocolPort) {
            $res['ProtocolPort'] = $this->protocolPort;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->publicEnable) {
            $res['PublicEnable'] = $this->publicEnable;
        }
        if (null !== $this->publicHost) {
            $res['PublicHost'] = $this->publicHost;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProxyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PrivateEnable'])) {
            $model->privateEnable = $map['PrivateEnable'];
        }
        if (isset($map['PrivateHost'])) {
            $model->privateHost = $map['PrivateHost'];
        }
        if (isset($map['ProtocolPort'])) {
            $model->protocolPort = $map['ProtocolPort'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['PublicEnable'])) {
            $model->publicEnable = $map['PublicEnable'];
        }
        if (isset($map['PublicHost'])) {
            $model->publicHost = $map['PublicHost'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
