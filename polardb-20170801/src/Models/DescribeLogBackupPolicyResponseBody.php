<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogBackupPolicyResponseBody extends Model
{
    /**
     * @description Indicates whether the log backup feature is enabled. Valid values:
     *
     *   0: The log backup feature is disabled.
     *   1: The log backup feature is enabled. By default, the log backup feature is enabled and cannot be disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enableBackupLog;

    /**
     * @description The region in which you want to store cross-region log backups. For more information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $logBackupAnotherRegionRegion;

    /**
     * @description The retention period of cross-region log backups. Valid values:
     *
     *   **0**: The cross-region backup feature is disabled.
     *   **30 to 7300**: Cross-region log backups are retained for 30 to 7,300 days.
     *   **-1**: The log backups are permanently retained.
     *
     * >  When you create a cluster, the default value of this parameter is **0**.
     * @example 0
     *
     * @var string
     */
    public $logBackupAnotherRegionRetentionPeriod;

    /**
     * @description The retention period of the log backups. Valid values:
     *
     *   3 to 7300: The log backups are retained for 3 to 7,300 days.
     *   \\-1: The log backups are permanently retained.
     *
     * @example 7
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @description The request ID.
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
