<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEngineVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBVersionRelease;

    /**
     * @var bool
     */
    public $enableUpgradeMajorVersion;

    /**
     * @var bool
     */
    public $enableUpgradeMinorVersion;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $proxyMinorVersion;

    /**
     * @var string
     */
    public $proxyVersionRelease;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBVersionRelease'          => 'DBVersionRelease',
        'enableUpgradeMajorVersion' => 'EnableUpgradeMajorVersion',
        'enableUpgradeMinorVersion' => 'EnableUpgradeMinorVersion',
        'engine'                    => 'Engine',
        'isLatestVersion'           => 'IsLatestVersion',
        'majorVersion'              => 'MajorVersion',
        'minorVersion'              => 'MinorVersion',
        'proxyMinorVersion'         => 'ProxyMinorVersion',
        'proxyVersionRelease'       => 'ProxyVersionRelease',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBVersionRelease) {
            $res['DBVersionRelease'] = $this->DBVersionRelease;
        }
        if (null !== $this->enableUpgradeMajorVersion) {
            $res['EnableUpgradeMajorVersion'] = $this->enableUpgradeMajorVersion;
        }
        if (null !== $this->enableUpgradeMinorVersion) {
            $res['EnableUpgradeMinorVersion'] = $this->enableUpgradeMinorVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->proxyMinorVersion) {
            $res['ProxyMinorVersion'] = $this->proxyMinorVersion;
        }
        if (null !== $this->proxyVersionRelease) {
            $res['ProxyVersionRelease'] = $this->proxyVersionRelease;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEngineVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBVersionRelease'])) {
            $model->DBVersionRelease = $map['DBVersionRelease'];
        }
        if (isset($map['EnableUpgradeMajorVersion'])) {
            $model->enableUpgradeMajorVersion = $map['EnableUpgradeMajorVersion'];
        }
        if (isset($map['EnableUpgradeMinorVersion'])) {
            $model->enableUpgradeMinorVersion = $map['EnableUpgradeMinorVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['ProxyMinorVersion'])) {
            $model->proxyMinorVersion = $map['ProxyMinorVersion'];
        }
        if (isset($map['ProxyVersionRelease'])) {
            $model->proxyVersionRelease = $map['ProxyVersionRelease'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
