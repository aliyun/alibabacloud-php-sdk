<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 33011000991317100041
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourcePoi;

    /**
     * @example 27.12435451436
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 112.2437647347
     *
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $nearPoi;
    protected $_name = [
        'corpId'         => 'CorpId',
        'dataSourceId'   => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'dataSourcePoi'  => 'DataSourcePoi',
        'latitude'       => 'Latitude',
        'longitude'      => 'Longitude',
        'nearPoi'        => 'NearPoi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourcePoi) {
            $res['DataSourcePoi'] = $this->dataSourcePoi;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->nearPoi) {
            $res['NearPoi'] = $this->nearPoi;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourcePoi'])) {
            $model->dataSourcePoi = $map['DataSourcePoi'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['NearPoi'])) {
            $model->nearPoi = $map['NearPoi'];
        }

        return $model;
    }
}
