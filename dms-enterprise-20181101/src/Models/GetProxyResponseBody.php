<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetProxyResponseBody extends Model
{
    /**
     * @description The ID of the user who enabled the secure access proxy feature.
     *
     * @example 12****
     *
     * @var int
     */
    public $creatorId;

    /**
     * @description The nickname of the user who enabled the secure access proxy feature.
     *
     * @example test_name
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description The error code returned if the request failed.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The condition cannot be empty!
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The port number used by the HTTPS protocol.
     *
     * @example 443
     *
     * @var int
     */
    public $httpsPort;

    /**
     * @description The ID of the instance.
     *
     * @example 183****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description Indicates whether the internal endpoint was enabled. Default value: **true**.
     *
     * @example true
     *
     * @var bool
     */
    public $privateEnable;

    /**
     * @description The internal endpoint.
     *
     * @example dphzmy-5j8oimjsz6ze****.proxy.dms.aliyuncs.com
     *
     * @var string
     */
    public $privateHost;

    /**
     * @description The port number used by the protocol.
     *
     * @example 3306
     *
     * @var int
     */
    public $protocolPort;

    /**
     * @description The protocol type of the database. Example: MYSQL.
     *
     * @example MYSQL
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the secure access proxy.
     *
     * @example 4**
     *
     * @var int
     */
    public $proxyId;

    /**
     * @description Indicates whether the public endpoint was enabled. Valid values:
     *
     *   **true**: The public endpoint was enabled.
     *   **false**: The public endpoint was disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $publicEnable;

    /**
     * @description The public endpoint. A public endpoint is returned no matter whether the public endpoint is enabled or disabled.
     *
     * >
     *
     *   If the value of the PublicEnable parameter is **true**, a valid public endpoint that can be resolved by using Alibaba Cloud DNS is returned.
     *
     *   If the value of the PublicEnable parameter is **false**, an invalid public endpoint that cannot be resolved by using Alibaba Cloud DNS is returned.
     *
     * @example dphzmy-5j8oimjsz6zed7k****.proxy.dms.aliyuncs.com
     *
     * @var string
     */
    public $publicHost;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example F49D4598-2B3C-5723-865E-2CCB818E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
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
        'regionId'      => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
