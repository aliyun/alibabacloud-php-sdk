<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackProtectionCountResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $blockHighCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $blockLowCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $blockMediumCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $monitorHighCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $monitorLowCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $monitorMediumCount;

    /**
     * @example 400E8C8C-ADD3-5F25-9038-BDC057841D20
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 61134279
     *
     * @var int
     */
    public $totalRequestCount;
    protected $_name = [
        'blockHighCount' => 'BlockHighCount',
        'blockLowCount' => 'BlockLowCount',
        'blockMediumCount' => 'BlockMediumCount',
        'monitorHighCount' => 'MonitorHighCount',
        'monitorLowCount' => 'MonitorLowCount',
        'monitorMediumCount' => 'MonitorMediumCount',
        'requestId' => 'RequestId',
        'totalRequestCount' => 'TotalRequestCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockHighCount) {
            $res['BlockHighCount'] = $this->blockHighCount;
        }
        if (null !== $this->blockLowCount) {
            $res['BlockLowCount'] = $this->blockLowCount;
        }
        if (null !== $this->blockMediumCount) {
            $res['BlockMediumCount'] = $this->blockMediumCount;
        }
        if (null !== $this->monitorHighCount) {
            $res['MonitorHighCount'] = $this->monitorHighCount;
        }
        if (null !== $this->monitorLowCount) {
            $res['MonitorLowCount'] = $this->monitorLowCount;
        }
        if (null !== $this->monitorMediumCount) {
            $res['MonitorMediumCount'] = $this->monitorMediumCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRequestCount) {
            $res['TotalRequestCount'] = $this->totalRequestCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackProtectionCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockHighCount'])) {
            $model->blockHighCount = $map['BlockHighCount'];
        }
        if (isset($map['BlockLowCount'])) {
            $model->blockLowCount = $map['BlockLowCount'];
        }
        if (isset($map['BlockMediumCount'])) {
            $model->blockMediumCount = $map['BlockMediumCount'];
        }
        if (isset($map['MonitorHighCount'])) {
            $model->monitorHighCount = $map['MonitorHighCount'];
        }
        if (isset($map['MonitorLowCount'])) {
            $model->monitorLowCount = $map['MonitorLowCount'];
        }
        if (isset($map['MonitorMediumCount'])) {
            $model->monitorMediumCount = $map['MonitorMediumCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRequestCount'])) {
            $model->totalRequestCount = $map['TotalRequestCount'];
        }

        return $model;
    }
}
