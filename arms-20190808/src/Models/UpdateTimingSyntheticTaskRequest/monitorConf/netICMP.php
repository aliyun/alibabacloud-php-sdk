<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class netICMP extends Model
{
    /**
     * @example 300
     *
     * @var int
     */
    public $interval;

    /**
     * @example 4
     *
     * @var int
     */
    public $packageNum;

    /**
     * @example 32
     *
     * @var int
     */
    public $packageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $splitPackage;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 5000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example true
     *
     * @var bool
     */
    public $tracertEnable;

    /**
     * @example 20
     *
     * @var int
     */
    public $tracertNumMax;

    /**
     * @example 60000
     *
     * @var int
     */
    public $tracertTimeout;
    protected $_name = [
        'interval'       => 'Interval',
        'packageNum'     => 'PackageNum',
        'packageSize'    => 'PackageSize',
        'splitPackage'   => 'SplitPackage',
        'targetUrl'      => 'TargetUrl',
        'timeout'        => 'Timeout',
        'tracertEnable'  => 'TracertEnable',
        'tracertNumMax'  => 'TracertNumMax',
        'tracertTimeout' => 'TracertTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->packageNum) {
            $res['PackageNum'] = $this->packageNum;
        }
        if (null !== $this->packageSize) {
            $res['PackageSize'] = $this->packageSize;
        }
        if (null !== $this->splitPackage) {
            $res['SplitPackage'] = $this->splitPackage;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->tracertEnable) {
            $res['TracertEnable'] = $this->tracertEnable;
        }
        if (null !== $this->tracertNumMax) {
            $res['TracertNumMax'] = $this->tracertNumMax;
        }
        if (null !== $this->tracertTimeout) {
            $res['TracertTimeout'] = $this->tracertTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netICMP
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['PackageNum'])) {
            $model->packageNum = $map['PackageNum'];
        }
        if (isset($map['PackageSize'])) {
            $model->packageSize = $map['PackageSize'];
        }
        if (isset($map['SplitPackage'])) {
            $model->splitPackage = $map['SplitPackage'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TracertEnable'])) {
            $model->tracertEnable = $map['TracertEnable'];
        }
        if (isset($map['TracertNumMax'])) {
            $model->tracertNumMax = $map['TracertNumMax'];
        }
        if (isset($map['TracertTimeout'])) {
            $model->tracertTimeout = $map['TracertTimeout'];
        }

        return $model;
    }
}
