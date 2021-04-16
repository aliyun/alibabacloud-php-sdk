<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListRangeDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataSourceIdPoi;

    /**
     * @var string
     */
    public $distance;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $dataSourceIdName;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $nearPoi;
    protected $_name = [
        'dataSourceIdPoi'  => 'DataSourceIdPoi',
        'distance'         => 'Distance',
        'dataSourceId'     => 'DataSourceId',
        'corpId'           => 'CorpId',
        'longitude'        => 'Longitude',
        'dataSourceIdName' => 'DataSourceIdName',
        'latitude'         => 'Latitude',
        'nearPoi'          => 'NearPoi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceIdPoi) {
            $res['DataSourceIdPoi'] = $this->dataSourceIdPoi;
        }
        if (null !== $this->distance) {
            $res['Distance'] = $this->distance;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->dataSourceIdName) {
            $res['DataSourceIdName'] = $this->dataSourceIdName;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
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
        if (isset($map['DataSourceIdPoi'])) {
            $model->dataSourceIdPoi = $map['DataSourceIdPoi'];
        }
        if (isset($map['Distance'])) {
            $model->distance = $map['Distance'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['DataSourceIdName'])) {
            $model->dataSourceIdName = $map['DataSourceIdName'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['NearPoi'])) {
            $model->nearPoi = $map['NearPoi'];
        }

        return $model;
    }
}
