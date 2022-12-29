<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled for the instance. Valid values:
     *
     *   **true**: Auto-renewal is enabled for the instance.
     *   **false**: Auto-renewal is disabled for the instance.
     *
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The category of the instance. Valid values:
     *
     *   **replicate**: the standalone or replica set instance
     *   **sharding**: the sharded cluster instance
     *
     * @example replicate
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The ID of the instance.
     *
     * @example dds-bp2568*****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The auto-renewal period. Unit: months.
     *
     * > * This parameter is ruturned only when the returned value of the **AutoRenew** parameter is **true**.
     * > * You can call the [ModifyInstanceAutoRenewalAttribute](~~145979~~) operation to modify the auto-renewal period.
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRenew'      => 'AutoRenew',
        'DBInstanceType' => 'DBInstanceType',
        'dbInstanceId'   => 'DbInstanceId',
        'duration'       => 'Duration',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
