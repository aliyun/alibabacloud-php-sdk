<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCrossBorderPackageForComplianceResponseBody;

use AlibabaCloud\Tea\Model;

class bandwidthPackages extends Model
{
    /**
     * @var bool
     */
    public $isBinded;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdA;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdB;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $bindTime;
    protected $_name = [
        'isBinded'               => 'IsBinded',
        'createTime'             => 'CreateTime',
        'cbnGeographicRegionIdA' => 'CbnGeographicRegionIdA',
        'bandwidthPackageId'     => 'BandwidthPackageId',
        'bandwidth'              => 'Bandwidth',
        'expiredTime'            => 'ExpiredTime',
        'cbnGeographicRegionIdB' => 'CbnGeographicRegionIdB',
        'aliUid'                 => 'AliUid',
        'bindTime'               => 'BindTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isBinded) {
            $res['IsBinded'] = $this->isBinded;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cbnGeographicRegionIdA) {
            $res['CbnGeographicRegionIdA'] = $this->cbnGeographicRegionIdA;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->cbnGeographicRegionIdB) {
            $res['CbnGeographicRegionIdB'] = $this->cbnGeographicRegionIdB;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsBinded'])) {
            $model->isBinded = $map['IsBinded'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CbnGeographicRegionIdA'])) {
            $model->cbnGeographicRegionIdA = $map['CbnGeographicRegionIdA'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CbnGeographicRegionIdB'])) {
            $model->cbnGeographicRegionIdB = $map['CbnGeographicRegionIdB'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }

        return $model;
    }
}
