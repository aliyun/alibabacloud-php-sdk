<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion;

class DescribeEngineVersionResponseBody extends Model
{
    /**
     * @var DBLatestMinorVersion
     */
    public $DBLatestMinorVersion;

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
     * @var string
     */
    public $isAutoUpgradeOpen;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $isNewSSLMode;

    /**
     * @var string
     */
    public $isOpenNGLB;

    /**
     * @var string
     */
    public $isRedisCompatibleVersion;

    /**
     * @var string
     */
    public $isSSLEnable;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var proxyLatestMinorVersion
     */
    public $proxyLatestMinorVersion;

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
        'DBLatestMinorVersion' => 'DBLatestMinorVersion',
        'DBVersionRelease' => 'DBVersionRelease',
        'enableUpgradeMajorVersion' => 'EnableUpgradeMajorVersion',
        'enableUpgradeMinorVersion' => 'EnableUpgradeMinorVersion',
        'engine' => 'Engine',
        'isAutoUpgradeOpen' => 'IsAutoUpgradeOpen',
        'isLatestVersion' => 'IsLatestVersion',
        'isNewSSLMode' => 'IsNewSSLMode',
        'isOpenNGLB' => 'IsOpenNGLB',
        'isRedisCompatibleVersion' => 'IsRedisCompatibleVersion',
        'isSSLEnable' => 'IsSSLEnable',
        'majorVersion' => 'MajorVersion',
        'minorVersion' => 'MinorVersion',
        'proxyLatestMinorVersion' => 'ProxyLatestMinorVersion',
        'proxyMinorVersion' => 'ProxyMinorVersion',
        'proxyVersionRelease' => 'ProxyVersionRelease',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBLatestMinorVersion) {
            $this->DBLatestMinorVersion->validate();
        }
        if (null !== $this->proxyLatestMinorVersion) {
            $this->proxyLatestMinorVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBLatestMinorVersion) {
            $res['DBLatestMinorVersion'] = null !== $this->DBLatestMinorVersion ? $this->DBLatestMinorVersion->toArray($noStream) : $this->DBLatestMinorVersion;
        }

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

        if (null !== $this->isAutoUpgradeOpen) {
            $res['IsAutoUpgradeOpen'] = $this->isAutoUpgradeOpen;
        }

        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }

        if (null !== $this->isNewSSLMode) {
            $res['IsNewSSLMode'] = $this->isNewSSLMode;
        }

        if (null !== $this->isOpenNGLB) {
            $res['IsOpenNGLB'] = $this->isOpenNGLB;
        }

        if (null !== $this->isRedisCompatibleVersion) {
            $res['IsRedisCompatibleVersion'] = $this->isRedisCompatibleVersion;
        }

        if (null !== $this->isSSLEnable) {
            $res['IsSSLEnable'] = $this->isSSLEnable;
        }

        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->proxyLatestMinorVersion) {
            $res['ProxyLatestMinorVersion'] = null !== $this->proxyLatestMinorVersion ? $this->proxyLatestMinorVersion->toArray($noStream) : $this->proxyLatestMinorVersion;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBLatestMinorVersion'])) {
            $model->DBLatestMinorVersion = DBLatestMinorVersion::fromMap($map['DBLatestMinorVersion']);
        }

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

        if (isset($map['IsAutoUpgradeOpen'])) {
            $model->isAutoUpgradeOpen = $map['IsAutoUpgradeOpen'];
        }

        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }

        if (isset($map['IsNewSSLMode'])) {
            $model->isNewSSLMode = $map['IsNewSSLMode'];
        }

        if (isset($map['IsOpenNGLB'])) {
            $model->isOpenNGLB = $map['IsOpenNGLB'];
        }

        if (isset($map['IsRedisCompatibleVersion'])) {
            $model->isRedisCompatibleVersion = $map['IsRedisCompatibleVersion'];
        }

        if (isset($map['IsSSLEnable'])) {
            $model->isSSLEnable = $map['IsSSLEnable'];
        }

        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['ProxyLatestMinorVersion'])) {
            $model->proxyLatestMinorVersion = proxyLatestMinorVersion::fromMap($map['ProxyLatestMinorVersion']);
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
