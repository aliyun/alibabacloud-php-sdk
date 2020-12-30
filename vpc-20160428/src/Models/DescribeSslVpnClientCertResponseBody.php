<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeSslVpnClientCertResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $clientCert;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $clientKey;

    /**
     * @var string
     */
    public $sslVpnClientCertId;

    /**
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @var string
     */
    public $caCert;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientConfig;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'             => 'Status',
        'clientCert'         => 'ClientCert',
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'createTime'         => 'CreateTime',
        'clientKey'          => 'ClientKey',
        'sslVpnClientCertId' => 'SslVpnClientCertId',
        'sslVpnServerId'     => 'SslVpnServerId',
        'caCert'             => 'CaCert',
        'regionId'           => 'RegionId',
        'clientConfig'       => 'ClientConfig',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->clientCert) {
            $res['ClientCert'] = $this->clientCert;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->clientKey) {
            $res['ClientKey'] = $this->clientKey;
        }
        if (null !== $this->sslVpnClientCertId) {
            $res['SslVpnClientCertId'] = $this->sslVpnClientCertId;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->caCert) {
            $res['CaCert'] = $this->caCert;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientConfig) {
            $res['ClientConfig'] = $this->clientConfig;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ClientCert'])) {
            $model->clientCert = $map['ClientCert'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ClientKey'])) {
            $model->clientKey = $map['ClientKey'];
        }
        if (isset($map['SslVpnClientCertId'])) {
            $model->sslVpnClientCertId = $map['SslVpnClientCertId'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['CaCert'])) {
            $model->caCert = $map['CaCert'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientConfig'])) {
            $model->clientConfig = $map['ClientConfig'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
