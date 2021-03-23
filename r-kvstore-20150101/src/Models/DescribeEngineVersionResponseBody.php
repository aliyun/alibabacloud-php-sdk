<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEngineVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

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
    public $minorVersion;

    /**
     * @var bool
     */
    public $enableUpgradeMinorVersion;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var bool
     */
    public $enableUpgradeMajorVersion;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'engine'                    => 'Engine',
        'isLatestVersion'           => 'IsLatestVersion',
        'minorVersion'              => 'MinorVersion',
        'enableUpgradeMinorVersion' => 'EnableUpgradeMinorVersion',
        'majorVersion'              => 'MajorVersion',
        'enableUpgradeMajorVersion' => 'EnableUpgradeMajorVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->enableUpgradeMinorVersion) {
            $res['EnableUpgradeMinorVersion'] = $this->enableUpgradeMinorVersion;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->enableUpgradeMajorVersion) {
            $res['EnableUpgradeMajorVersion'] = $this->enableUpgradeMajorVersion;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['EnableUpgradeMinorVersion'])) {
            $model->enableUpgradeMinorVersion = $map['EnableUpgradeMinorVersion'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['EnableUpgradeMajorVersion'])) {
            $model->enableUpgradeMajorVersion = $map['EnableUpgradeMajorVersion'];
        }

        return $model;
    }
}
