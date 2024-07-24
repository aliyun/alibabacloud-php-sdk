<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class netICMP extends Model
{
    /**
     * @description The interval at which ICMP packets are sent. Unit: milliseconds. Minimum value: 200. Maximum value: 2000. Default value: 200.
     *
     * @example 200
     *
     * @var int
     */
    public $interval;

    /**
     * @description The number of ICMP packets that are sent. Minimum value: 1. Maximum value: 50. Default value: 4.
     *
     * @example 4
     *
     * @var int
     */
    public $packageNum;

    /**
     * @description The size of each ICMP packet. Unit: bytes. Valid values: 32, 64, 128, 256, 512, 1024, 1080, and 1450.
     *
     * @example 32
     *
     * @var int
     */
    public $packageSize;

    /**
     * @description Specifies whether to split ICMP packets. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $splitPackage;

    /**
     * @description The destination IP address or domain name.
     *
     * This parameter is required.
     * @example www.example.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The timeout period for the ICMP synthetic test. Unit: milliseconds. Minimum value: 1000. Maximum value: 300000. Default value: 20000.
     *
     * @example 20000
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Specifies whether to enable the tracert command. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $tracertEnable;

    /**
     * @description The maximum number of hops for the tracert command. Minimum value: 1. Maximum value: 128. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $tracertNumMax;

    /**
     * @description The timeout period of the tracert command. Unit: milliseconds. Minimum value: 1000. Maximum value: 300000. Default value: 60000.
     *
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
