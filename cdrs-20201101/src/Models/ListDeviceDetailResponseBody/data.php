<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

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
    public $latitude;

    /**
     * @var string
     */
    public $dataSourcePoi;

    /**
     * @var string
     */
    public $nearPoi;
    protected $_name = [
        'dataSourceName' => 'DataSourceName',
        'dataSourceId'   => 'DataSourceId',
        'corpId'         => 'CorpId',
        'longitude'      => 'Longitude',
        'latitude'       => 'Latitude',
        'dataSourcePoi'  => 'DataSourcePoi',
        'nearPoi'        => 'NearPoi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
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
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->dataSourcePoi) {
            $res['DataSourcePoi'] = $this->dataSourcePoi;
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
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
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['DataSourcePoi'])) {
            $model->dataSourcePoi = $map['DataSourcePoi'];
        }
        if (isset($map['NearPoi'])) {
            $model->nearPoi = $map['NearPoi'];
        }

        return $model;
    }
}
