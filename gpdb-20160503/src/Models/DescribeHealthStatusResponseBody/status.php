<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbgpSegmentDiskUsagePercentMax;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgConnectionStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgDiskStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgDiskUsagePercent;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgMasterDiskUsagePercentMax;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgMasterStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgSegmentStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\nodeMasterConnectionStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\nodeMasterStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\nodeSegmentConnectionStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\nodeSegmentDiskStatus;
use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @var adbgpSegmentDiskUsagePercentMax
     */
    public $adbgpSegmentDiskUsagePercentMax;

    /**
     * @var adbpgConnectionStatus
     */
    public $adbpgConnectionStatus;

    /**
     * @var adbpgDiskStatus
     */
    public $adbpgDiskStatus;

    /**
     * @var adbpgDiskUsagePercent
     */
    public $adbpgDiskUsagePercent;

    /**
     * @var adbpgMasterDiskUsagePercentMax
     */
    public $adbpgMasterDiskUsagePercentMax;

    /**
     * @var adbpgMasterStatus
     */
    public $adbpgMasterStatus;

    /**
     * @var adbpgSegmentStatus
     */
    public $adbpgSegmentStatus;

    /**
     * @var adbpgStatus
     */
    public $adbpgStatus;

    /**
     * @var nodeMasterConnectionStatus
     */
    public $nodeMasterConnectionStatus;

    /**
     * @var nodeMasterStatus
     */
    public $nodeMasterStatus;

    /**
     * @var nodeSegmentConnectionStatus
     */
    public $nodeSegmentConnectionStatus;

    /**
     * @var nodeSegmentDiskStatus
     */
    public $nodeSegmentDiskStatus;
    protected $_name = [
        'adbgpSegmentDiskUsagePercentMax' => 'adbgp_segment_disk_usage_percent_max',
        'adbpgConnectionStatus'           => 'adbpg_connection_status',
        'adbpgDiskStatus'                 => 'adbpg_disk_status',
        'adbpgDiskUsagePercent'           => 'adbpg_disk_usage_percent',
        'adbpgMasterDiskUsagePercentMax'  => 'adbpg_master_disk_usage_percent_max',
        'adbpgMasterStatus'               => 'adbpg_master_status',
        'adbpgSegmentStatus'              => 'adbpg_segment_status',
        'adbpgStatus'                     => 'adbpg_status',
        'nodeMasterConnectionStatus'      => 'node_master_connection_status',
        'nodeMasterStatus'                => 'node_master_status',
        'nodeSegmentConnectionStatus'     => 'node_segment_connection_status',
        'nodeSegmentDiskStatus'           => 'node_segment_disk_status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adbgpSegmentDiskUsagePercentMax) {
            $res['adbgp_segment_disk_usage_percent_max'] = null !== $this->adbgpSegmentDiskUsagePercentMax ? $this->adbgpSegmentDiskUsagePercentMax->toMap() : null;
        }
        if (null !== $this->adbpgConnectionStatus) {
            $res['adbpg_connection_status'] = null !== $this->adbpgConnectionStatus ? $this->adbpgConnectionStatus->toMap() : null;
        }
        if (null !== $this->adbpgDiskStatus) {
            $res['adbpg_disk_status'] = null !== $this->adbpgDiskStatus ? $this->adbpgDiskStatus->toMap() : null;
        }
        if (null !== $this->adbpgDiskUsagePercent) {
            $res['adbpg_disk_usage_percent'] = null !== $this->adbpgDiskUsagePercent ? $this->adbpgDiskUsagePercent->toMap() : null;
        }
        if (null !== $this->adbpgMasterDiskUsagePercentMax) {
            $res['adbpg_master_disk_usage_percent_max'] = null !== $this->adbpgMasterDiskUsagePercentMax ? $this->adbpgMasterDiskUsagePercentMax->toMap() : null;
        }
        if (null !== $this->adbpgMasterStatus) {
            $res['adbpg_master_status'] = null !== $this->adbpgMasterStatus ? $this->adbpgMasterStatus->toMap() : null;
        }
        if (null !== $this->adbpgSegmentStatus) {
            $res['adbpg_segment_status'] = null !== $this->adbpgSegmentStatus ? $this->adbpgSegmentStatus->toMap() : null;
        }
        if (null !== $this->adbpgStatus) {
            $res['adbpg_status'] = null !== $this->adbpgStatus ? $this->adbpgStatus->toMap() : null;
        }
        if (null !== $this->nodeMasterConnectionStatus) {
            $res['node_master_connection_status'] = null !== $this->nodeMasterConnectionStatus ? $this->nodeMasterConnectionStatus->toMap() : null;
        }
        if (null !== $this->nodeMasterStatus) {
            $res['node_master_status'] = null !== $this->nodeMasterStatus ? $this->nodeMasterStatus->toMap() : null;
        }
        if (null !== $this->nodeSegmentConnectionStatus) {
            $res['node_segment_connection_status'] = null !== $this->nodeSegmentConnectionStatus ? $this->nodeSegmentConnectionStatus->toMap() : null;
        }
        if (null !== $this->nodeSegmentDiskStatus) {
            $res['node_segment_disk_status'] = null !== $this->nodeSegmentDiskStatus ? $this->nodeSegmentDiskStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adbgp_segment_disk_usage_percent_max'])) {
            $model->adbgpSegmentDiskUsagePercentMax = adbgpSegmentDiskUsagePercentMax::fromMap($map['adbgp_segment_disk_usage_percent_max']);
        }
        if (isset($map['adbpg_connection_status'])) {
            $model->adbpgConnectionStatus = adbpgConnectionStatus::fromMap($map['adbpg_connection_status']);
        }
        if (isset($map['adbpg_disk_status'])) {
            $model->adbpgDiskStatus = adbpgDiskStatus::fromMap($map['adbpg_disk_status']);
        }
        if (isset($map['adbpg_disk_usage_percent'])) {
            $model->adbpgDiskUsagePercent = adbpgDiskUsagePercent::fromMap($map['adbpg_disk_usage_percent']);
        }
        if (isset($map['adbpg_master_disk_usage_percent_max'])) {
            $model->adbpgMasterDiskUsagePercentMax = adbpgMasterDiskUsagePercentMax::fromMap($map['adbpg_master_disk_usage_percent_max']);
        }
        if (isset($map['adbpg_master_status'])) {
            $model->adbpgMasterStatus = adbpgMasterStatus::fromMap($map['adbpg_master_status']);
        }
        if (isset($map['adbpg_segment_status'])) {
            $model->adbpgSegmentStatus = adbpgSegmentStatus::fromMap($map['adbpg_segment_status']);
        }
        if (isset($map['adbpg_status'])) {
            $model->adbpgStatus = adbpgStatus::fromMap($map['adbpg_status']);
        }
        if (isset($map['node_master_connection_status'])) {
            $model->nodeMasterConnectionStatus = nodeMasterConnectionStatus::fromMap($map['node_master_connection_status']);
        }
        if (isset($map['node_master_status'])) {
            $model->nodeMasterStatus = nodeMasterStatus::fromMap($map['node_master_status']);
        }
        if (isset($map['node_segment_connection_status'])) {
            $model->nodeSegmentConnectionStatus = nodeSegmentConnectionStatus::fromMap($map['node_segment_connection_status']);
        }
        if (isset($map['node_segment_disk_status'])) {
            $model->nodeSegmentDiskStatus = nodeSegmentDiskStatus::fromMap($map['node_segment_disk_status']);
        }

        return $model;
    }
}
