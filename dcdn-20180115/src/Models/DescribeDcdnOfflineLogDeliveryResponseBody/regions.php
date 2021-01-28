<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var int
     */
    public $ossId;

    /**
     * @var string
     */
    public $ossPathPrefix;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dlaTableName;

    /**
     * @var string
     */
    public $areaName;

    /**
     * @var string
     */
    public $dlaDbName;

    /**
     * @var string
     */
    public $dlaVcName;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $isOverseas;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossBucketName;
    protected $_name = [
        'ossId'         => 'OssId',
        'ossPathPrefix' => 'OssPathPrefix',
        'regionId'      => 'RegionId',
        'dlaTableName'  => 'DlaTableName',
        'areaName'      => 'AreaName',
        'dlaDbName'     => 'DlaDbName',
        'dlaVcName'     => 'DlaVcName',
        'regionName'    => 'RegionName',
        'areaId'        => 'AreaId',
        'isOverseas'    => 'IsOverseas',
        'ossEndpoint'   => 'OssEndpoint',
        'ossBucketName' => 'OssBucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossId) {
            $res['OssId'] = $this->ossId;
        }
        if (null !== $this->ossPathPrefix) {
            $res['OssPathPrefix'] = $this->ossPathPrefix;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dlaTableName) {
            $res['DlaTableName'] = $this->dlaTableName;
        }
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->dlaDbName) {
            $res['DlaDbName'] = $this->dlaDbName;
        }
        if (null !== $this->dlaVcName) {
            $res['DlaVcName'] = $this->dlaVcName;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->isOverseas) {
            $res['IsOverseas'] = $this->isOverseas;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssId'])) {
            $model->ossId = $map['OssId'];
        }
        if (isset($map['OssPathPrefix'])) {
            $model->ossPathPrefix = $map['OssPathPrefix'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DlaTableName'])) {
            $model->dlaTableName = $map['DlaTableName'];
        }
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['DlaDbName'])) {
            $model->dlaDbName = $map['DlaDbName'];
        }
        if (isset($map['DlaVcName'])) {
            $model->dlaVcName = $map['DlaVcName'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['IsOverseas'])) {
            $model->isOverseas = $map['IsOverseas'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        return $model;
    }
}
