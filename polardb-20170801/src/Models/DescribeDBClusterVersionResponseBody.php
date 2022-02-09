<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBLatestVersion;

    /**
     * @var string
     */
    public $DBMinorVersion;

    /**
     * @var string
     */
    public $DBRevisionVersion;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $DBVersionStatus;

    /**
     * @var string
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $proxyLatestVersion;

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
    public $requestId;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'DBLatestVersion'      => 'DBLatestVersion',
        'DBMinorVersion'       => 'DBMinorVersion',
        'DBRevisionVersion'    => 'DBRevisionVersion',
        'DBVersion'            => 'DBVersion',
        'DBVersionStatus'      => 'DBVersionStatus',
        'isLatestVersion'      => 'IsLatestVersion',
        'proxyLatestVersion'   => 'ProxyLatestVersion',
        'proxyRevisionVersion' => 'ProxyRevisionVersion',
        'proxyVersionStatus'   => 'ProxyVersionStatus',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBLatestVersion) {
            $res['DBLatestVersion'] = $this->DBLatestVersion;
        }
        if (null !== $this->DBMinorVersion) {
            $res['DBMinorVersion'] = $this->DBMinorVersion;
        }
        if (null !== $this->DBRevisionVersion) {
            $res['DBRevisionVersion'] = $this->DBRevisionVersion;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->DBVersionStatus) {
            $res['DBVersionStatus'] = $this->DBVersionStatus;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->proxyLatestVersion) {
            $res['ProxyLatestVersion'] = $this->proxyLatestVersion;
        }
        if (null !== $this->proxyRevisionVersion) {
            $res['ProxyRevisionVersion'] = $this->proxyRevisionVersion;
        }
        if (null !== $this->proxyVersionStatus) {
            $res['ProxyVersionStatus'] = $this->proxyVersionStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBLatestVersion'])) {
            $model->DBLatestVersion = $map['DBLatestVersion'];
        }
        if (isset($map['DBMinorVersion'])) {
            $model->DBMinorVersion = $map['DBMinorVersion'];
        }
        if (isset($map['DBRevisionVersion'])) {
            $model->DBRevisionVersion = $map['DBRevisionVersion'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DBVersionStatus'])) {
            $model->DBVersionStatus = $map['DBVersionStatus'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['ProxyLatestVersion'])) {
            $model->proxyLatestVersion = $map['ProxyLatestVersion'];
        }
        if (isset($map['ProxyRevisionVersion'])) {
            $model->proxyRevisionVersion = $map['ProxyRevisionVersion'];
        }
        if (isset($map['ProxyVersionStatus'])) {
            $model->proxyVersionStatus = $map['ProxyVersionStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
