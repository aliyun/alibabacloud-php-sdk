<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAgentlessAssetRequest extends Model
{
    /**
     * @description The page number in a paginated query.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the cloud disk. Values:
     *
     * - **system**: System disk
     *
     * - **data**: Data disk
     * @example data
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The ID of the asset instance.
     *
     * @example s-bp1g6wxdwps7s9dz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the asset instance.
     *
     * @example ca_cpm_******
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The maximum number of items to return per page in a paginated query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the operating system.
     *
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $scanRegionId;

    /**
     * @description The type of the detection target. Values:
     *
     * - **3**: User snapshot
     *
     * - **4**: User-defined image
     * @example 1
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'diskType'     => 'DiskType',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'pageSize'     => 'PageSize',
        'platform'     => 'Platform',
        'scanRegionId' => 'ScanRegionId',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->scanRegionId) {
            $res['ScanRegionId'] = $this->scanRegionId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentlessAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ScanRegionId'])) {
            $model->scanRegionId = $map['ScanRegionId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
