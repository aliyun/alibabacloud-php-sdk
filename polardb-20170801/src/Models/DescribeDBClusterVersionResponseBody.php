<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponseBody\DBRevisionVersionList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponseBody\proxyRevisionVersionList;

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
     * @var DBRevisionVersionList[]
     */
    public $DBRevisionVersionList;

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
    public $isProxyLatestVersion;

    /**
     * @var string
     */
    public $proxyLatestVersion;

    /**
     * @var string
     */
    public $proxyRevisionVersion;

    /**
     * @var proxyRevisionVersionList[]
     */
    public $proxyRevisionVersionList;

    /**
     * @var string
     */
    public $proxyVersionStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBLatestVersion' => 'DBLatestVersion',
        'DBMinorVersion' => 'DBMinorVersion',
        'DBRevisionVersion' => 'DBRevisionVersion',
        'DBRevisionVersionList' => 'DBRevisionVersionList',
        'DBVersion' => 'DBVersion',
        'DBVersionStatus' => 'DBVersionStatus',
        'isLatestVersion' => 'IsLatestVersion',
        'isProxyLatestVersion' => 'IsProxyLatestVersion',
        'proxyLatestVersion' => 'ProxyLatestVersion',
        'proxyRevisionVersion' => 'ProxyRevisionVersion',
        'proxyRevisionVersionList' => 'ProxyRevisionVersionList',
        'proxyVersionStatus' => 'ProxyVersionStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBRevisionVersionList)) {
            Model::validateArray($this->DBRevisionVersionList);
        }
        if (\is_array($this->proxyRevisionVersionList)) {
            Model::validateArray($this->proxyRevisionVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->DBRevisionVersionList)) {
                $res['DBRevisionVersionList'] = [];
                $n1 = 0;
                foreach ($this->DBRevisionVersionList as $item1) {
                    $res['DBRevisionVersionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->proxyRevisionVersionList) {
            if (\is_array($this->proxyRevisionVersionList)) {
                $res['ProxyRevisionVersionList'] = [];
                $n1 = 0;
                foreach ($this->proxyRevisionVersionList as $item1) {
                    $res['ProxyRevisionVersionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->proxyVersionStatus) {
            $res['ProxyVersionStatus'] = $this->proxyVersionStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
                $n1 = 0;
                foreach ($map['DBRevisionVersionList'] as $item1) {
                    $model->DBRevisionVersionList[$n1++] = DBRevisionVersionList::fromMap($item1);
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

        if (isset($map['ProxyRevisionVersionList'])) {
            if (!empty($map['ProxyRevisionVersionList'])) {
                $model->proxyRevisionVersionList = [];
                $n1 = 0;
                foreach ($map['ProxyRevisionVersionList'] as $item1) {
                    $model->proxyRevisionVersionList[$n1++] = proxyRevisionVersionList::fromMap($item1);
                }
            }
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
