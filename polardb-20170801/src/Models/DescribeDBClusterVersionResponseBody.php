<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $DBRevisionVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBVersionStatus;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBMinorVersion;

    /**
     * @var string
     */
    public $proxyRevisionVersion;

    /**
     * @var string
     */
    public $proxyVersionStatus;

    /**
     * @var string
     */
    public $proxyLatestVersion;

    /**
     * @var string
     */
    public $DBLatestVersion;
    protected $_name = [
        'isLatestVersion'      => 'IsLatestVersion',
        'DBVersion'            => 'DBVersion',
        'DBRevisionVersion'    => 'DBRevisionVersion',
        'requestId'            => 'RequestId',
        'DBVersionStatus'      => 'DBVersionStatus',
        'DBClusterId'          => 'DBClusterId',
        'DBMinorVersion'       => 'DBMinorVersion',
        'proxyRevisionVersion' => 'ProxyRevisionVersion',
        'proxyVersionStatus'   => 'ProxyVersionStatus',
        'proxyLatestVersion'   => 'ProxyLatestVersion',
        'DBLatestVersion'      => 'DBLatestVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->DBRevisionVersion) {
            $res['DBRevisionVersion'] = $this->DBRevisionVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBVersionStatus) {
            $res['DBVersionStatus'] = $this->DBVersionStatus;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBMinorVersion) {
            $res['DBMinorVersion'] = $this->DBMinorVersion;
        }
        if (null !== $this->proxyRevisionVersion) {
            $res['ProxyRevisionVersion'] = $this->proxyRevisionVersion;
        }
        if (null !== $this->proxyVersionStatus) {
            $res['ProxyVersionStatus'] = $this->proxyVersionStatus;
        }
        if (null !== $this->proxyLatestVersion) {
            $res['ProxyLatestVersion'] = $this->proxyLatestVersion;
        }
        if (null !== $this->DBLatestVersion) {
            $res['DBLatestVersion'] = $this->DBLatestVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DBRevisionVersion'])) {
            $model->DBRevisionVersion = $map['DBRevisionVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBVersionStatus'])) {
            $model->DBVersionStatus = $map['DBVersionStatus'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBMinorVersion'])) {
            $model->DBMinorVersion = $map['DBMinorVersion'];
        }
        if (isset($map['ProxyRevisionVersion'])) {
            $model->proxyRevisionVersion = $map['ProxyRevisionVersion'];
        }
        if (isset($map['ProxyVersionStatus'])) {
            $model->proxyVersionStatus = $map['ProxyVersionStatus'];
        }
        if (isset($map['ProxyLatestVersion'])) {
            $model->proxyLatestVersion = $map['ProxyLatestVersion'];
        }
        if (isset($map['DBLatestVersion'])) {
            $model->DBLatestVersion = $map['DBLatestVersion'];
        }

        return $model;
    }
}
