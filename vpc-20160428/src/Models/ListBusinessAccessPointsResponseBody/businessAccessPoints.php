<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody;

use AlibabaCloud\Tea\Model;

class businessAccessPoints extends Model
{
    /**
     * @example ap-cn-hangzhou-xs-B
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $accessPointName;

    /**
     * @example cb-****
     *
     * @var string
     */
    public $cloudBoxInstanceIds;

    /**
     * @example 30.198416
     *
     * @var float
     */
    public $latitude;

    /**
     * @example 120.247514
     *
     * @var float
     */
    public $longitude;

    /**
     * @example CT
     *
     * @var string
     */
    public $supportLineOperator;

    /**
     * @example 1000Base-T
     *
     * @var string
     */
    public $supportPortTypes;
    protected $_name = [
        'accessPointId'       => 'AccessPointId',
        'accessPointName'     => 'AccessPointName',
        'cloudBoxInstanceIds' => 'CloudBoxInstanceIds',
        'latitude'            => 'Latitude',
        'longitude'           => 'Longitude',
        'supportLineOperator' => 'SupportLineOperator',
        'supportPortTypes'    => 'SupportPortTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->cloudBoxInstanceIds) {
            $res['CloudBoxInstanceIds'] = $this->cloudBoxInstanceIds;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->supportLineOperator) {
            $res['SupportLineOperator'] = $this->supportLineOperator;
        }
        if (null !== $this->supportPortTypes) {
            $res['SupportPortTypes'] = $this->supportPortTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessAccessPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['CloudBoxInstanceIds'])) {
            $model->cloudBoxInstanceIds = $map['CloudBoxInstanceIds'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['SupportLineOperator'])) {
            $model->supportLineOperator = $map['SupportLineOperator'];
        }
        if (isset($map['SupportPortTypes'])) {
            $model->supportPortTypes = $map['SupportPortTypes'];
        }

        return $model;
    }
}
