<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConvertInstanceResourceGroupRequest extends Model
{
    /**
     * @description This historical parameter does not take effect and is not required.
     *
     * @example m4312mab158****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of new resource group. You can obtain the ID on the Resource Group page in the Resource Management console. For more information, see [View basic information about a resource group](https://help.aliyun.com/document_detail/151181.html).
     *
     * @example rg-aek2r4fkrqw****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is only for special services and not required.
     *
     * @example rg-3m1213ye7l****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the DTS instance. You can view the ID in the **ID/Name** column on the task page in the console.
     *
     * >  This parameter is required.
     *
     * @example dtszhc12zp727o****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description This parameter is only for special services and not required.
     *
     * @example true
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsJobId' => 'DtsJobId',
        'newResourceGroupId' => 'NewResourceGroupId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertInstanceResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
