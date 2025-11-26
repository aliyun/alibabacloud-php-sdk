<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\Dara\Model;

class DescribeAttackProtectionCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $blockHighCount;

    /**
     * @var int
     */
    public $blockLowCount;

    /**
     * @var int
     */
    public $blockMediumCount;

    /**
     * @var int
     */
    public $monitorHighCount;

    /**
     * @var int
     */
    public $monitorLowCount;

    /**
     * @var int
     */
    public $monitorMediumCount;

    /**
     * @var string
     */
    public $requestId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
