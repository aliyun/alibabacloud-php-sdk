<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class Region extends Model
{
    /**
     * @description 城市
     *
     * @var string
     */
    public $regionCity;

    /**
     * @description id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 名称
     *
     * @var string
     */
    public $regionName;

    /**
     * @description 州省
     *
     * @var string
     */
    public $regionState;

    /**
     * @description 服务地址
     *
     * @var string
     */
    public $serviceUrl;
    protected $_name = [
        'regionCity'  => 'RegionCity',
        'regionId'    => 'RegionId',
        'regionName'  => 'RegionName',
        'regionState' => 'RegionState',
        'serviceUrl'  => 'ServiceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionCity) {
            $res['RegionCity'] = $this->regionCity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->regionState) {
            $res['RegionState'] = $this->regionState;
        }
        if (null !== $this->serviceUrl) {
            $res['ServiceUrl'] = $this->serviceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionCity'])) {
            $model->regionCity = $map['RegionCity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RegionState'])) {
            $model->regionState = $map['RegionState'];
        }
        if (isset($map['ServiceUrl'])) {
            $model->serviceUrl = $map['ServiceUrl'];
        }

        return $model;
    }
}
