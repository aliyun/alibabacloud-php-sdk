<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeSslVpnClientCertResponseBody extends Model
{
    /**
     * @description The CA certificate.
     *
     * @example CA certificate
     *
     * @var string
     */
    public $caCert;

    /**
     * @description The client certificate.
     *
     * @example Client certificate
     *
     * @var string
     */
    public $clientCert;

    /**
     * @description The client configuration.
     *
     * @example Client configuration
     *
     * @var string
     */
    public $clientConfig;

    /**
     * @description The client key.
     *
     * @example The key of the client
     *
     * @var string
     */
    public $clientKey;

    /**
     * @description The timestamp that indicates when the SSL client certificate was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1552550980000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The timestamp that indicates when the SSL client certificate expires. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1647158980000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the SSL client certificate.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where the SSL client certificate is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 5BE01CD7-5A50-472D-AC14-CA181C5C03BE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the SSL client certificate belongs.
     *
     * You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to query the resource group information.
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the SSL client certificate.
     *
     * @example vsc-bp13k5mp4tg8v3z9b****
     *
     * @var string
     */
    public $sslVpnClientCertId;

    /**
     * @description The ID of the SSL server.
     *
     * @example vss-bp155e9yclsg1xgq4****
     *
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @description The status of the SSL client certificate. Valid values:
     *
     *   **expiring-soon**
     *   **normal**
     *   **expired**
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'caCert'             => 'CaCert',
        'clientCert'         => 'ClientCert',
        'clientConfig'       => 'ClientConfig',
        'clientKey'          => 'ClientKey',
        'createTime'         => 'CreateTime',
        'endTime'            => 'EndTime',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
        'requestId'          => 'RequestId',
        'resourceGroupId'    => 'ResourceGroupId',
        'sslVpnClientCertId' => 'SslVpnClientCertId',
        'sslVpnServerId'     => 'SslVpnServerId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCert) {
            $res['CaCert'] = $this->caCert;
        }
        if (null !== $this->clientCert) {
            $res['ClientCert'] = $this->clientCert;
        }
        if (null !== $this->clientConfig) {
            $res['ClientConfig'] = $this->clientConfig;
        }
        if (null !== $this->clientKey) {
            $res['ClientKey'] = $this->clientKey;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sslVpnClientCertId) {
            $res['SslVpnClientCertId'] = $this->sslVpnClientCertId;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSslVpnClientCertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCert'])) {
            $model->caCert = $map['CaCert'];
        }
        if (isset($map['ClientCert'])) {
            $model->clientCert = $map['ClientCert'];
        }
        if (isset($map['ClientConfig'])) {
            $model->clientConfig = $map['ClientConfig'];
        }
        if (isset($map['ClientKey'])) {
            $model->clientKey = $map['ClientKey'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SslVpnClientCertId'])) {
            $model->sslVpnClientCertId = $map['SslVpnClientCertId'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
