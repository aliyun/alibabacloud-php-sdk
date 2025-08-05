<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;
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
        'adbpgConnectionStatus' => 'adbpg_connection_status',
        'adbpgDiskStatus' => 'adbpg_disk_status',
        'adbpgDiskUsagePercent' => 'adbpg_disk_usage_percent',
        'adbpgInstanceColdDataGb' => 'adbpg_instance_cold_data_gb',
        'adbpgInstanceHotDataGb' => 'adbpg_instance_hot_data_gb',
        'adbpgInstanceTotalDataGb' => 'adbpg_instance_total_data_gb',
        'adbpgMasterDiskUsagePercentMax' => 'adbpg_master_disk_usage_percent_max',
        'adbpgMasterStatus' => 'adbpg_master_status',
        'adbpgSegmentStatus' => 'adbpg_segment_status',
        'adbpgStatus' => 'adbpg_status',
        'nodeMasterConnectionStatus' => 'node_master_connection_status',
        'nodeMasterStatus' => 'node_master_status',
        'nodeSegmentConnectionStatus' => 'node_segment_connection_status',
        'nodeSegmentDiskStatus' => 'node_segment_disk_status',
    ];

    public function validate()
    {
        if (null !== $this->adbgpSegmentDiskUsagePercentMax) {
            $this->adbgpSegmentDiskUsagePercentMax->validate();
        }
        if (null !== $this->adbpgConnectionStatus) {
            $this->adbpgConnectionStatus->validate();
        }
        if (null !== $this->adbpgDiskStatus) {
            $this->adbpgDiskStatus->validate();
        }
        if (null !== $this->adbpgDiskUsagePercent) {
            $this->adbpgDiskUsagePercent->validate();
        }
        if (null !== $this->adbpgInstanceColdDataGb) {
            $this->adbpgInstanceColdDataGb->validate();
        }
        if (null !== $this->adbpgInstanceHotDataGb) {
            $this->adbpgInstanceHotDataGb->validate();
        }
        if (null !== $this->adbpgInstanceTotalDataGb) {
            $this->adbpgInstanceTotalDataGb->validate();
        }
        if (null !== $this->adbpgMasterDiskUsagePercentMax) {
            $this->adbpgMasterDiskUsagePercentMax->validate();
        }
        if (null !== $this->adbpgMasterStatus) {
            $this->adbpgMasterStatus->validate();
        }
        if (null !== $this->adbpgSegmentStatus) {
            $this->adbpgSegmentStatus->validate();
        }
        if (null !== $this->adbpgStatus) {
            $this->adbpgStatus->validate();
        }
        if (null !== $this->nodeMasterConnectionStatus) {
            $this->nodeMasterConnectionStatus->validate();
        }
        if (null !== $this->nodeMasterStatus) {
            $this->nodeMasterStatus->validate();
        }
        if (null !== $this->nodeSegmentConnectionStatus) {
            $this->nodeSegmentConnectionStatus->validate();
        }
        if (null !== $this->nodeSegmentDiskStatus) {
            $this->nodeSegmentDiskStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adbgpSegmentDiskUsagePercentMax) {
            $res['adbgp_segment_disk_usage_percent_max'] = null !== $this->adbgpSegmentDiskUsagePercentMax ? $this->adbgpSegmentDiskUsagePercentMax->toArray($noStream) : $this->adbgpSegmentDiskUsagePercentMax;
        }

        if (null !== $this->adbpgConnectionStatus) {
            $res['adbpg_connection_status'] = null !== $this->adbpgConnectionStatus ? $this->adbpgConnectionStatus->toArray($noStream) : $this->adbpgConnectionStatus;
        }

        if (null !== $this->adbpgDiskStatus) {
            $res['adbpg_disk_status'] = null !== $this->adbpgDiskStatus ? $this->adbpgDiskStatus->toArray($noStream) : $this->adbpgDiskStatus;
        }

        if (null !== $this->adbpgDiskUsagePercent) {
            $res['adbpg_disk_usage_percent'] = null !== $this->adbpgDiskUsagePercent ? $this->adbpgDiskUsagePercent->toArray($noStream) : $this->adbpgDiskUsagePercent;
        }

        if (null !== $this->adbpgInstanceColdDataGb) {
            $res['adbpg_instance_cold_data_gb'] = null !== $this->adbpgInstanceColdDataGb ? $this->adbpgInstanceColdDataGb->toArray($noStream) : $this->adbpgInstanceColdDataGb;
        }

        if (null !== $this->adbpgInstanceHotDataGb) {
            $res['adbpg_instance_hot_data_gb'] = null !== $this->adbpgInstanceHotDataGb ? $this->adbpgInstanceHotDataGb->toArray($noStream) : $this->adbpgInstanceHotDataGb;
        }

        if (null !== $this->adbpgInstanceTotalDataGb) {
            $res['adbpg_instance_total_data_gb'] = null !== $this->adbpgInstanceTotalDataGb ? $this->adbpgInstanceTotalDataGb->toArray($noStream) : $this->adbpgInstanceTotalDataGb;
        }

        if (null !== $this->adbpgMasterDiskUsagePercentMax) {
            $res['adbpg_master_disk_usage_percent_max'] = null !== $this->adbpgMasterDiskUsagePercentMax ? $this->adbpgMasterDiskUsagePercentMax->toArray($noStream) : $this->adbpgMasterDiskUsagePercentMax;
        }

        if (null !== $this->adbpgMasterStatus) {
            $res['adbpg_master_status'] = null !== $this->adbpgMasterStatus ? $this->adbpgMasterStatus->toArray($noStream) : $this->adbpgMasterStatus;
        }

        if (null !== $this->adbpgSegmentStatus) {
            $res['adbpg_segment_status'] = null !== $this->adbpgSegmentStatus ? $this->adbpgSegmentStatus->toArray($noStream) : $this->adbpgSegmentStatus;
        }

        if (null !== $this->adbpgStatus) {
            $res['adbpg_status'] = null !== $this->adbpgStatus ? $this->adbpgStatus->toArray($noStream) : $this->adbpgStatus;
        }

        if (null !== $this->nodeMasterConnectionStatus) {
            $res['node_master_connection_status'] = null !== $this->nodeMasterConnectionStatus ? $this->nodeMasterConnectionStatus->toArray($noStream) : $this->nodeMasterConnectionStatus;
        }

        if (null !== $this->nodeMasterStatus) {
            $res['node_master_status'] = null !== $this->nodeMasterStatus ? $this->nodeMasterStatus->toArray($noStream) : $this->nodeMasterStatus;
        }

        if (null !== $this->nodeSegmentConnectionStatus) {
            $res['node_segment_connection_status'] = null !== $this->nodeSegmentConnectionStatus ? $this->nodeSegmentConnectionStatus->toArray($noStream) : $this->nodeSegmentConnectionStatus;
        }

        if (null !== $this->nodeSegmentDiskStatus) {
            $res['node_segment_disk_status'] = null !== $this->nodeSegmentDiskStatus ? $this->nodeSegmentDiskStatus->toArray($noStream) : $this->nodeSegmentDiskStatus;
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
