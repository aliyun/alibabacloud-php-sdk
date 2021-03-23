<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionResponseBody\appVersion;

use AlibabaCloud\Tea\Model;

class adapters extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $minOsVersion;

    /**
     * @var string
     */
    public $maxOsVersion;

    /**
     * @var string
     */
    public $deviceModelName;
    protected $_name = [
        'id'              => 'Id',
        'versionId'       => 'VersionId',
        'deviceModelId'   => 'DeviceModelId',
        'minOsVersion'    => 'MinOsVersion',
        'maxOsVersion'    => 'MaxOsVersion',
        'deviceModelName' => 'DeviceModelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->minOsVersion) {
            $res['MinOsVersion'] = $this->minOsVersion;
        }
        if (null !== $this->maxOsVersion) {
            $res['MaxOsVersion'] = $this->maxOsVersion;
        }
        if (null !== $this->deviceModelName) {
            $res['DeviceModelName'] = $this->deviceModelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adapters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['MinOsVersion'])) {
            $model->minOsVersion = $map['MinOsVersion'];
        }
        if (isset($map['MaxOsVersion'])) {
            $model->maxOsVersion = $map['MaxOsVersion'];
        }
        if (isset($map['DeviceModelName'])) {
            $model->deviceModelName = $map['DeviceModelName'];
        }

        return $model;
    }
}
