<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessAssetResponseBody;

use AlibabaCloud\Tea\Model;

class assetList extends Model
{
    /**
     * @description The type of the cloud disk. Values:
     *
     * - data: Data disk.
     * @example system
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The instance ID.
     *
     * @example s-rj9gda4wolo0zixi****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example TestInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Operating system type.
     *
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the asset. Values:
     *
     * - **3**: User snapshot
     *
     * - **4**: User-defined image
     * @example 3
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'diskType'     => 'DiskType',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'platform'     => 'Platform',
        'regionId'     => 'RegionId',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
