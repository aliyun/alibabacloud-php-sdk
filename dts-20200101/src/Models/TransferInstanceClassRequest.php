<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class TransferInstanceClassRequest extends Model
{
    /**
     * @description The ID of the data migration or data synchronization task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example r4yr723m199****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The new instance class of the DTS instance. You can call the [DescribeDtsJobDetail](~~208925~~) operation to query the original instance class of the DTS instance.
     *
     *   DTS supports the following instance classes for a data migration instance: **xxlarge**, **xlarge**, **large**, **medium**, and **small**.
     *   DTS supports the following instance classes for a data synchronization instance: **large**, **medium**, **small**, and **micro**.
     *
     * >  For more information about the test performance of each instance class, see [Specifications of data migration instances](~~26606~~) and [Specifications of data synchronization instances](~~26605~~).
     * @example large
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description Specifies whether to upgrade or downgrade the DTS instance. Valid values:
     *
     *   **UPGRADE**
     *   **DOWNGRADE**
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The ID of the region where the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dtsJobId'        => 'DtsJobId',
        'instanceClass'   => 'InstanceClass',
        'orderType'       => 'OrderType',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferInstanceClassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
