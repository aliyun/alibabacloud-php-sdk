<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class InitDtsRdsInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $endpointCenId;

    /**
     * @var string
     */
    public $endpointInstanceId;

    /**
     * @var string
     */
    public $endpointInstanceType;

    /**
     * @var string
     */
    public $endpointRegion;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dtsInstanceId'        => 'DtsInstanceId',
        'endpointCenId'        => 'EndpointCenId',
        'endpointInstanceId'   => 'EndpointInstanceId',
        'endpointInstanceType' => 'EndpointInstanceType',
        'endpointRegion'       => 'EndpointRegion',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->endpointCenId) {
            $res['EndpointCenId'] = $this->endpointCenId;
        }
        if (null !== $this->endpointInstanceId) {
            $res['EndpointInstanceId'] = $this->endpointInstanceId;
        }
        if (null !== $this->endpointInstanceType) {
            $res['EndpointInstanceType'] = $this->endpointInstanceType;
        }
        if (null !== $this->endpointRegion) {
            $res['EndpointRegion'] = $this->endpointRegion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitDtsRdsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['EndpointCenId'])) {
            $model->endpointCenId = $map['EndpointCenId'];
        }
        if (isset($map['EndpointInstanceId'])) {
            $model->endpointInstanceId = $map['EndpointInstanceId'];
        }
        if (isset($map['EndpointInstanceType'])) {
            $model->endpointInstanceType = $map['EndpointInstanceType'];
        }
        if (isset($map['EndpointRegion'])) {
            $model->endpointRegion = $map['EndpointRegion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
