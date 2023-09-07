<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponseBody\DBRevisionVersionList;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterVersionResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The latest version of the database engine.
     *
     * @example 8.0.1.1.16
     *
     * @var string
     */
    public $DBLatestVersion;

    /**
     * @description The minor version of the database engine.
     *
     *   If `DBVersion` is **8.0**, the valid values of this parameter are:
     *
     *   **8.0.2**
     *   **8.0.1**
     *
     *   If `DBVersion` is **5.7**, set the value of this parameter to **5.7.28**.
     *
     *   If `DBVersion` is **5.6**, the value of this parameter is **5.6.16**.
     *
     * @example 8.0.1
     *
     * @var string
     */
    public $DBMinorVersion;

    /**
     * @description The revision version of the database engine.
     *
     * > For a cluster of the PolarDB for MySQL 5.6, the `DBRevisionVersion` parameter returns the revision version information only if the revision version is released later than August 31, 2020. Otherwise, this parameter returns an empty value. For more information about the kernel version of a cluster that runs the PolarDB for MySQL, see [PolarDB for MySQL](~~423884~~).
     * @example 8.0.1.1.7
     *
     * @var string
     */
    public $DBRevisionVersion;

    /**
     * @description 可升级的版本信息列表。
     *
     * @var DBRevisionVersionList[]
     */
    public $DBRevisionVersionList;

    /**
     * @description The major version of the database engine. Valid values:
     *
     *   **8.0**
     *   **5.7**
     *   **5.6**
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The status of the minor version. Valid values:
     *
     *   **Stable**: The minor version is stable.
     *   **Old**: The minor version is outdated. We recommend that you upgrade the cluster to the latest version.
     *   **HighRisk**: The minor version has critical defects. We recommend that you immediately upgrade the cluster to the latest version.
     *
     * > For more information about how to upgrade the minor version, see [Upgrade versions](~~158572~~).
     * @example Stable
     *
     * @var string
     */
    public $DBVersionStatus;

    /**
     * @description Indicates whether the kernel version is the latest version. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $isLatestVersion;

    /**
     * @description Indicates whether PolarProxy is the latest version. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $isProxyLatestVersion;

    /**
     * @description The latest version of PolarProxy.
     *
     * @example 2.4.17
     *
     * @var string
     */
    public $proxyLatestVersion;

    /**
     * @description The version of PolarProxy.
     *
     * @example 2.4.15
     *
     * @var string
     */
    public $proxyRevisionVersion;

    /**
     * @description The status of PolarProxy. Valid values:
     *
     *   **Stable**: The minor version is stable.
     *   **Old**: The minor version is outdated. We recommend that you upgrade the cluster to the latest version.
     *   **HighRisk**: The minor version has critical defects. We recommend that you immediately upgrade the cluster to the latest version.
     *
     * > For more information about how to upgrade the PolarProxy version, see [Upgrade versions](~~158572~~).
     * @example Stable
     *
     * @var string
     */
    public $proxyVersionStatus;

    /**
     * @description The ID of the request.
     *
     * @example 47921222-0D37-4133-8C0D-017DC3******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId'           => 'DBClusterId',
        'DBLatestVersion'       => 'DBLatestVersion',
        'DBMinorVersion'        => 'DBMinorVersion',
        'DBRevisionVersion'     => 'DBRevisionVersion',
        'DBRevisionVersionList' => 'DBRevisionVersionList',
        'DBVersion'             => 'DBVersion',
        'DBVersionStatus'       => 'DBVersionStatus',
        'isLatestVersion'       => 'IsLatestVersion',
        'isProxyLatestVersion'  => 'IsProxyLatestVersion',
        'proxyLatestVersion'    => 'ProxyLatestVersion',
        'proxyRevisionVersion'  => 'ProxyRevisionVersion',
        'proxyVersionStatus'    => 'ProxyVersionStatus',
        'requestId'             => 'RequestId',
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
        if (null !== $this->DBRevisionVersionList) {
            $res['DBRevisionVersionList'] = [];
            if (null !== $this->DBRevisionVersionList && \is_array($this->DBRevisionVersionList)) {
                $n = 0;
                foreach ($this->DBRevisionVersionList as $item) {
                    $res['DBRevisionVersionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->isProxyLatestVersion) {
            $res['IsProxyLatestVersion'] = $this->isProxyLatestVersion;
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
        if (isset($map['DBRevisionVersionList'])) {
            if (!empty($map['DBRevisionVersionList'])) {
                $model->DBRevisionVersionList = [];
                $n                            = 0;
                foreach ($map['DBRevisionVersionList'] as $item) {
                    $model->DBRevisionVersionList[$n++] = null !== $item ? DBRevisionVersionList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['IsProxyLatestVersion'])) {
            $model->isProxyLatestVersion = $map['IsProxyLatestVersion'];
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
