<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\bookAllowInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\carHelper;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\carTimeControl;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\cityControlInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\crossCityInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\electronicFenceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\modifyDestinationInfo;

class carStandard extends Model
{
    /**
     * @var bookAllowInfo
     */
    public $bookAllowInfo;

    /**
     * @var carHelper
     */
    public $carHelper;

    /**
     * @var carTimeControl
     */
    public $carTimeControl;

    /**
     * @var cityControlInfo
     */
    public $cityControlInfo;

    /**
     * @var crossCityInfo
     */
    public $crossCityInfo;

    /**
     * @var electronicFenceInfo
     */
    public $electronicFenceInfo;

    /**
     * @var string
     */
    public $levelCodes;

    /**
     * @var modifyDestinationInfo
     */
    public $modifyDestinationInfo;

    /**
     * @var int
     */
    public $timesTotal;

    /**
     * @var int
     */
    public $timesType;
    protected $_name = [
        'bookAllowInfo' => 'book_allow_info',
        'carHelper' => 'car_helper',
        'carTimeControl' => 'car_time_control',
        'cityControlInfo' => 'city_control_info',
        'crossCityInfo' => 'cross_city_info',
        'electronicFenceInfo' => 'electronic_fence_info',
        'levelCodes' => 'level_codes',
        'modifyDestinationInfo' => 'modify_destination_info',
        'timesTotal' => 'times_total',
        'timesType' => 'times_type',
    ];

    public function validate()
    {
        if (null !== $this->bookAllowInfo) {
            $this->bookAllowInfo->validate();
        }
        if (null !== $this->carHelper) {
            $this->carHelper->validate();
        }
        if (null !== $this->carTimeControl) {
            $this->carTimeControl->validate();
        }
        if (null !== $this->cityControlInfo) {
            $this->cityControlInfo->validate();
        }
        if (null !== $this->crossCityInfo) {
            $this->crossCityInfo->validate();
        }
        if (null !== $this->electronicFenceInfo) {
            $this->electronicFenceInfo->validate();
        }
        if (null !== $this->modifyDestinationInfo) {
            $this->modifyDestinationInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookAllowInfo) {
            $res['book_allow_info'] = null !== $this->bookAllowInfo ? $this->bookAllowInfo->toArray($noStream) : $this->bookAllowInfo;
        }

        if (null !== $this->carHelper) {
            $res['car_helper'] = null !== $this->carHelper ? $this->carHelper->toArray($noStream) : $this->carHelper;
        }

        if (null !== $this->carTimeControl) {
            $res['car_time_control'] = null !== $this->carTimeControl ? $this->carTimeControl->toArray($noStream) : $this->carTimeControl;
        }

        if (null !== $this->cityControlInfo) {
            $res['city_control_info'] = null !== $this->cityControlInfo ? $this->cityControlInfo->toArray($noStream) : $this->cityControlInfo;
        }

        if (null !== $this->crossCityInfo) {
            $res['cross_city_info'] = null !== $this->crossCityInfo ? $this->crossCityInfo->toArray($noStream) : $this->crossCityInfo;
        }

        if (null !== $this->electronicFenceInfo) {
            $res['electronic_fence_info'] = null !== $this->electronicFenceInfo ? $this->electronicFenceInfo->toArray($noStream) : $this->electronicFenceInfo;
        }

        if (null !== $this->levelCodes) {
            $res['level_codes'] = $this->levelCodes;
        }

        if (null !== $this->modifyDestinationInfo) {
            $res['modify_destination_info'] = null !== $this->modifyDestinationInfo ? $this->modifyDestinationInfo->toArray($noStream) : $this->modifyDestinationInfo;
        }

        if (null !== $this->timesTotal) {
            $res['times_total'] = $this->timesTotal;
        }

        if (null !== $this->timesType) {
            $res['times_type'] = $this->timesType;
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
        if (isset($map['book_allow_info'])) {
            $model->bookAllowInfo = bookAllowInfo::fromMap($map['book_allow_info']);
        }

        if (isset($map['car_helper'])) {
            $model->carHelper = carHelper::fromMap($map['car_helper']);
        }

        if (isset($map['car_time_control'])) {
            $model->carTimeControl = carTimeControl::fromMap($map['car_time_control']);
        }

        if (isset($map['city_control_info'])) {
            $model->cityControlInfo = cityControlInfo::fromMap($map['city_control_info']);
        }

        if (isset($map['cross_city_info'])) {
            $model->crossCityInfo = crossCityInfo::fromMap($map['cross_city_info']);
        }

        if (isset($map['electronic_fence_info'])) {
            $model->electronicFenceInfo = electronicFenceInfo::fromMap($map['electronic_fence_info']);
        }

        if (isset($map['level_codes'])) {
            $model->levelCodes = $map['level_codes'];
        }

        if (isset($map['modify_destination_info'])) {
            $model->modifyDestinationInfo = modifyDestinationInfo::fromMap($map['modify_destination_info']);
        }

        if (isset($map['times_total'])) {
            $model->timesTotal = $map['times_total'];
        }

        if (isset($map['times_type'])) {
            $model->timesType = $map['times_type'];
        }

        return $model;
    }
}
