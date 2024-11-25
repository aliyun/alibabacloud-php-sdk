<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ResizeRCInstanceDiskRequest extends Model
{
    /**
     * @description Specifies whether to enable the automatic payment feature for the instance. Valid values:
     *
     *   **true** (default): enables the feature. Make sure that your account balance is sufficient.
     *   **false**: disables the feature. An unpaid order is generated.
     *
     * >  If your account balance is insufficient, you can set AutoPay to false. In this case, an unpaid order is generated. You can complete the payment in the Expenses and Costs console.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, service limits, and insufficient inventory errors.
     *   **false**: performs a dry run and performs the actual request. If the request passes the dry run, the instance is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The instance ID.
     *
     * @example rm-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new disk size. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $newSize;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The method that you want to use to resize the disk. Valid values:
     *
     *   **offline** (default): resizes disks offline. After you resize a disk offline, you must restart the instance for the resizing operation to take effect.
     *   **online**: resizes disks online. After you resize a disk online, the resizing operation takes effect immediately and you do not need to restart the instance.
     *
     * @example online
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoPay'    => 'AutoPay',
        'diskId'     => 'DiskId',
        'dryRun'     => 'DryRun',
        'instanceId' => 'InstanceId',
        'newSize'    => 'NewSize',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->newSize) {
            $res['NewSize'] = $this->newSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeRCInstanceDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NewSize'])) {
            $model->newSize = $map['NewSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
