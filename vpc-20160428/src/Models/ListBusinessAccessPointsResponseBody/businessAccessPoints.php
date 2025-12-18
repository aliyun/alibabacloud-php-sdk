<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody\businessAccessPoints\opticalModuleModels;

class businessAccessPoints extends Model
{
    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $accessPointName;

    /**
     * @var string
     */
    public $cloudBoxInstanceIds;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var opticalModuleModels[]
     */
    public $opticalModuleModels;

    /**
     * @var string
     */
    public $supportLineOperator;

    /**
     * @var string
     */
    public $supportPortTypes;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'accessPointName' => 'AccessPointName',
        'cloudBoxInstanceIds' => 'CloudBoxInstanceIds',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'opticalModuleModels' => 'OpticalModuleModels',
        'supportLineOperator' => 'SupportLineOperator',
        'supportPortTypes' => 'SupportPortTypes',
    ];

    public function validate()
    {
        if (\is_array($this->opticalModuleModels)) {
            Model::validateArray($this->opticalModuleModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->opticalModuleModels) {
            if (\is_array($this->opticalModuleModels)) {
                $res['OpticalModuleModels'] = [];
                $n1 = 0;
                foreach ($this->opticalModuleModels as $item1) {
                    $res['OpticalModuleModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportLineOperator) {
            $res['SupportLineOperator'] = $this->supportLineOperator;
        }

        if (null !== $this->supportPortTypes) {
            $res['SupportPortTypes'] = $this->supportPortTypes;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['OpticalModuleModels'])) {
            if (!empty($map['OpticalModuleModels'])) {
                $model->opticalModuleModels = [];
                $n1 = 0;
                foreach ($map['OpticalModuleModels'] as $item1) {
                    $model->opticalModuleModels[$n1] = opticalModuleModels::fromMap($item1);
                    ++$n1;
                }
            }
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
