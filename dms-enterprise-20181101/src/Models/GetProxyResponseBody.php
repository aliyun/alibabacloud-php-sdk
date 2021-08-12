<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetProxyResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $proxyId;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

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
     * @var bool
     */
    public $publicEnable;

    /**
     * @var string
     */
    public $publicHost;

    /**
     * @var int
     */
    public $mysqlPort;

    /**
     * @var int
     */
    public $httpsPort;
    protected $_name = [
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'errorMessage'  => 'ErrorMessage',
        'errorCode'     => 'ErrorCode',
        'proxyId'       => 'ProxyId',
        'creatorId'     => 'CreatorId',
        'creatorName'   => 'CreatorName',
        'instanceId'    => 'InstanceId',
        'privateEnable' => 'PrivateEnable',
        'privateHost'   => 'PrivateHost',
        'publicEnable'  => 'PublicEnable',
        'publicHost'    => 'PublicHost',
        'mysqlPort'     => 'MysqlPort',
        'httpsPort'     => 'HttpsPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
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
        if (null !== $this->publicEnable) {
            $res['PublicEnable'] = $this->publicEnable;
        }
        if (null !== $this->publicHost) {
            $res['PublicHost'] = $this->publicHost;
        }
        if (null !== $this->mysqlPort) {
            $res['MysqlPort'] = $this->mysqlPort;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
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
        if (isset($map['PublicEnable'])) {
            $model->publicEnable = $map['PublicEnable'];
        }
        if (isset($map['PublicHost'])) {
            $model->publicHost = $map['PublicHost'];
        }
        if (isset($map['MysqlPort'])) {
            $model->mysqlPort = $map['MysqlPort'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }

        return $model;
    }
}
