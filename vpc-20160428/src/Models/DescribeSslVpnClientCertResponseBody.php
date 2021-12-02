<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeSslVpnClientCertResponseBody extends Model
{
    /**
     * @var string
     */
    public $caCert;

    /**
     * @var string
     */
    public $clientCert;

    /**
     * @var string
     */
    public $clientConfig;

    /**
     * @var string
     */
    public $clientKey;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

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
