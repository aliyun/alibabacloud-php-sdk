<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbgpSegmentDiskUsagePercentMax;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgConnectionStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgDiskStatus;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgDiskUsagePercent;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgInstanceColdDataGb;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgInstanceHotDataGb;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status\adbpgInstanceTotalDataGb;
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
     * @description The information of maximum compute node storage usage.
     *
     * >  This parameter value is returned only for instances in elastic storage mode.
     * @var adbgpSegmentDiskUsagePercentMax
     */
    public $adbgpSegmentDiskUsagePercentMax;

    /**
     * @description The information of instance connection health status.
     *
     * @var adbpgConnectionStatus
     */
    public $adbpgConnectionStatus;

    /**
     * @description The information of instance storage status.
     *
     * >  This parameter value is returned only for instances in elastic storage mode.
     * @var adbpgDiskStatus
     */
    public $adbpgDiskStatus;

    /**
     * @description The information of instance storage usage.
     *
     * >  This parameter value is returned only for instances in elastic storage mode.
     * @var adbpgDiskUsagePercent
     */
    public $adbpgDiskUsagePercent;

    /**
     * @var adbpgInstanceColdDataGb
     */
    public $adbpgInstanceColdDataGb;

    /**
     * @var adbpgInstanceHotDataGb
     */
    public $adbpgInstanceHotDataGb;

    /**
     * @var adbpgInstanceTotalDataGb
     */
    public $adbpgInstanceTotalDataGb;

    /**
     * @description The information of maximum coordinator node storage usage.
     *
     * >  This parameter value is returned only for instances in elastic storage mode.
     * @var adbpgMasterDiskUsagePercentMax
     */
    public $adbpgMasterDiskUsagePercentMax;

    /**
     * @description The information of coordinator node availability status.
     *
     * @var adbpgMasterStatus
     */
    public $adbpgMasterStatus;

    /**
     * @description The information of compute node availability status.
     *
     * @var adbpgSegmentStatus
     */
    public $adbpgSegmentStatus;

    /**
     * @description The information of instance health status.
     *
     * @var adbpgStatus
     */
    public $adbpgStatus;

    /**
     * @description The information of coordinator node connection health status.
     *
     * @var nodeMasterConnectionStatus
     */
    public $nodeMasterConnectionStatus;

    /**
     * @description The information of coordinator node health status.
     *
     * @var nodeMasterStatus
     */
    public $nodeMasterStatus;

    /**
     * @description The information of compute node connection health status.
     *
     * @var nodeSegmentConnectionStatus
     */
    public $nodeSegmentConnectionStatus;

    /**
     * @description The information of compute node storage status.
     *
     * >  This parameter value is returned only for instances in elastic storage mode.
     * @var nodeSegmentDiskStatus
     */
    public $nodeSegmentDiskStatus;
    protected $_name = [
        'adbgpSegmentDiskUsagePercentMax' => 'adbgp_segment_disk_usage_percent_max',
        'adbpgConnectionStatus'           => 'adbpg_connection_status',
        'adbpgDiskStatus'                 => 'adbpg_disk_status',
        'adbpgDiskUsagePercent'           => 'adbpg_disk_usage_percent',
        'adbpgInstanceColdDataGb'         => 'adbpg_instance_cold_data_gb',
        'adbpgInstanceHotDataGb'          => 'adbpg_instance_hot_data_gb',
        'adbpgInstanceTotalDataGb'        => 'adbpg_instance_total_data_gb',
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
        if (null !== $this->adbpgInstanceColdDataGb) {
            $res['adbpg_instance_cold_data_gb'] = null !== $this->adbpgInstanceColdDataGb ? $this->adbpgInstanceColdDataGb->toMap() : null;
        }
        if (null !== $this->adbpgInstanceHotDataGb) {
            $res['adbpg_instance_hot_data_gb'] = null !== $this->adbpgInstanceHotDataGb ? $this->adbpgInstanceHotDataGb->toMap() : null;
        }
        if (null !== $this->adbpgInstanceTotalDataGb) {
            $res['adbpg_instance_total_data_gb'] = null !== $this->adbpgInstanceTotalDataGb ? $this->adbpgInstanceTotalDataGb->toMap() : null;
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
        if (isset($map['adbpg_instance_cold_data_gb'])) {
            $model->adbpgInstanceColdDataGb = adbpgInstanceColdDataGb::fromMap($map['adbpg_instance_cold_data_gb']);
        }
        if (isset($map['adbpg_instance_hot_data_gb'])) {
            $model->adbpgInstanceHotDataGb = adbpgInstanceHotDataGb::fromMap($map['adbpg_instance_hot_data_gb']);
        }
        if (isset($map['adbpg_instance_total_data_gb'])) {
            $model->adbpgInstanceTotalDataGb = adbpgInstanceTotalDataGb::fromMap($map['adbpg_instance_total_data_gb']);
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
