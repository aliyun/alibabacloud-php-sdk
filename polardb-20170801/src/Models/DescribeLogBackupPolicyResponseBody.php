<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogBackupPolicyResponseBody extends Model
{
    /**
     * @description Indicates whether the log backup feature was enabled. Valid values:
     *
     *   0: disabled.
     *   1: enabled. By default, the log backup feature is enabled and cannot be disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enableBackupLog;

    /**
     * @var string
     */
    public $logBackupAnotherRegionRegion;

    /**
     * @var string
     */
    public $logBackupAnotherRegionRetentionPeriod;

    /**
     * @description The retention period of the logs. Valid values:
     *
     *   7 to 7300: The logs are retained for 7 to 7,300 days.
     *   \-1: The logs are permanently retained.
     *
     * @example 7
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @description The ID of the request.
     *
     * @example 62EE0051-102B-488D-9C79-D607B8******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enableBackupLog'                       => 'EnableBackupLog',
        'logBackupAnotherRegionRegion'          => 'LogBackupAnotherRegionRegion',
        'logBackupAnotherRegionRetentionPeriod' => 'LogBackupAnotherRegionRetentionPeriod',
        'logBackupRetentionPeriod'              => 'LogBackupRetentionPeriod',
        'requestId'                             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->logBackupAnotherRegionRegion) {
            $res['LogBackupAnotherRegionRegion'] = $this->logBackupAnotherRegionRegion;
        }
        if (null !== $this->logBackupAnotherRegionRetentionPeriod) {
            $res['LogBackupAnotherRegionRetentionPeriod'] = $this->logBackupAnotherRegionRetentionPeriod;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['LogBackupAnotherRegionRegion'])) {
            $model->logBackupAnotherRegionRegion = $map['LogBackupAnotherRegionRegion'];
        }
        if (isset($map['LogBackupAnotherRegionRetentionPeriod'])) {
            $model->logBackupAnotherRegionRetentionPeriod = $map['LogBackupAnotherRegionRetentionPeriod'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
