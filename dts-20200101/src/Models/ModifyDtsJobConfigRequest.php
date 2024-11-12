<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobConfigRequest extends Model
{
    /**
     * @description DTS job ID, which can be queried by calling [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html).
     *
     * @example lxsn87r328d****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The parameters that you want to modify. Specify a JSON string. For more information, see [Parameters](https://help.aliyun.com/document_detail/2536412.html).
     *
     * @example [{\\"module\\":\\"07\\",\\"name\\":\\"sink.connection.idle.second\\",\\"value\\":60},{\\"module\\":\\"07\\",\\"name\\":\\"sink.batch.size.maximum\\",\\"value\\":64}]
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The region where the instance is located. For more details, see [List of Supported Regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dtsJobId'        => 'DtsJobId',
        'ownerId'         => 'OwnerId',
        'parameters'      => 'Parameters',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
     * @return ModifyDtsJobConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
