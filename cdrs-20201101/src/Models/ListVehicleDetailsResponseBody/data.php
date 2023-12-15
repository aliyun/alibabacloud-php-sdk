<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $gender;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var string
     */
    public $plateId;

    /**
     * @var string
     */
    public $popularAddress;

    /**
     * @var string
     */
    public $popularPoi;

    /**
     * @example 18
     *
     * @var string
     */
    public $prefOutTime;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099132700164443_0/20210122/184812_qjaw6y4MSy.jpg?region=huadong2-zy"
     *
     * @var string
     */
    public $sourceImageStoragePath;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099132700164443_0/20210122/184812_qjaw6y4MSy.jpg?region=huadong2-zy"
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099132700164443_0/20210122/184812_qjaw6y4MSy.jpg?region=huadong2-zy"
     *
     * @var string
     */
    public $targetImageStoragePath;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099132700164443_0/20210122/184812_qjaw6y4MSy.jpg?region=huadong2-zy"
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 1
     *
     * @var string
     */
    public $vehicleApplication;

    /**
     * @example 1
     *
     * @var string
     */
    public $vehicleClass;

    /**
     * @example 1
     *
     * @var string
     */
    public $vehicleColor;

    /**
     * @var string
     */
    public $vehicleId;
    protected $_name = [
        'gender'                 => 'Gender',
        'personId'               => 'PersonId',
        'personType'             => 'PersonType',
        'plateId'                => 'PlateId',
        'popularAddress'         => 'PopularAddress',
        'popularPoi'             => 'PopularPoi',
        'prefOutTime'            => 'PrefOutTime',
        'sourceImageStoragePath' => 'SourceImageStoragePath',
        'sourceUrl'              => 'SourceUrl',
        'targetImageStoragePath' => 'TargetImageStoragePath',
        'targetUrl'              => 'TargetUrl',
        'vehicleApplication'     => 'VehicleApplication',
        'vehicleClass'           => 'VehicleClass',
        'vehicleColor'           => 'VehicleColor',
        'vehicleId'              => 'VehicleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->personType) {
            $res['PersonType'] = $this->personType;
        }
        if (null !== $this->plateId) {
            $res['PlateId'] = $this->plateId;
        }
        if (null !== $this->popularAddress) {
            $res['PopularAddress'] = $this->popularAddress;
        }
        if (null !== $this->popularPoi) {
            $res['PopularPoi'] = $this->popularPoi;
        }
        if (null !== $this->prefOutTime) {
            $res['PrefOutTime'] = $this->prefOutTime;
        }
        if (null !== $this->sourceImageStoragePath) {
            $res['SourceImageStoragePath'] = $this->sourceImageStoragePath;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->targetImageStoragePath) {
            $res['TargetImageStoragePath'] = $this->targetImageStoragePath;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->vehicleApplication) {
            $res['VehicleApplication'] = $this->vehicleApplication;
        }
        if (null !== $this->vehicleClass) {
            $res['VehicleClass'] = $this->vehicleClass;
        }
        if (null !== $this->vehicleColor) {
            $res['VehicleColor'] = $this->vehicleColor;
        }
        if (null !== $this->vehicleId) {
            $res['VehicleId'] = $this->vehicleId;
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
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PersonType'])) {
            $model->personType = $map['PersonType'];
        }
        if (isset($map['PlateId'])) {
            $model->plateId = $map['PlateId'];
        }
        if (isset($map['PopularAddress'])) {
            $model->popularAddress = $map['PopularAddress'];
        }
        if (isset($map['PopularPoi'])) {
            $model->popularPoi = $map['PopularPoi'];
        }
        if (isset($map['PrefOutTime'])) {
            $model->prefOutTime = $map['PrefOutTime'];
        }
        if (isset($map['SourceImageStoragePath'])) {
            $model->sourceImageStoragePath = $map['SourceImageStoragePath'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['TargetImageStoragePath'])) {
            $model->targetImageStoragePath = $map['TargetImageStoragePath'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['VehicleApplication'])) {
            $model->vehicleApplication = $map['VehicleApplication'];
        }
        if (isset($map['VehicleClass'])) {
            $model->vehicleClass = $map['VehicleClass'];
        }
        if (isset($map['VehicleColor'])) {
            $model->vehicleColor = $map['VehicleColor'];
        }
        if (isset($map['VehicleId'])) {
            $model->vehicleId = $map['VehicleId'];
        }

        return $model;
    }
}
