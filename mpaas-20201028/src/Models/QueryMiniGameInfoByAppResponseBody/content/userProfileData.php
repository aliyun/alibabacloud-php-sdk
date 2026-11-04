<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMiniGameInfoByAppResponseBody\content;

use AlibabaCloud\Dara\Model;

class userProfileData extends Model
{
    /**
     * @var string
     */
    public $activeRegionCodes;

    /**
     * @var string
     */
    public $activeRegions;

    /**
     * @var string
     */
    public $ageSegment;

    /**
     * @var string
     */
    public $androidActiveModels;

    /**
     * @var int
     */
    public $androidRatio;

    /**
     * @var int
     */
    public $femaleRatio;

    /**
     * @var int
     */
    public $harmonyRatio;

    /**
     * @var string
     */
    public $iosActiveModels;

    /**
     * @var int
     */
    public $iosRatio;

    /**
     * @var int
     */
    public $maleRatio;

    /**
     * @var string
     */
    public $profileRemark;
    protected $_name = [
        'activeRegionCodes' => 'ActiveRegionCodes',
        'activeRegions' => 'ActiveRegions',
        'ageSegment' => 'AgeSegment',
        'androidActiveModels' => 'AndroidActiveModels',
        'androidRatio' => 'AndroidRatio',
        'femaleRatio' => 'FemaleRatio',
        'harmonyRatio' => 'HarmonyRatio',
        'iosActiveModels' => 'IosActiveModels',
        'iosRatio' => 'IosRatio',
        'maleRatio' => 'MaleRatio',
        'profileRemark' => 'ProfileRemark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeRegionCodes) {
            $res['ActiveRegionCodes'] = $this->activeRegionCodes;
        }

        if (null !== $this->activeRegions) {
            $res['ActiveRegions'] = $this->activeRegions;
        }

        if (null !== $this->ageSegment) {
            $res['AgeSegment'] = $this->ageSegment;
        }

        if (null !== $this->androidActiveModels) {
            $res['AndroidActiveModels'] = $this->androidActiveModels;
        }

        if (null !== $this->androidRatio) {
            $res['AndroidRatio'] = $this->androidRatio;
        }

        if (null !== $this->femaleRatio) {
            $res['FemaleRatio'] = $this->femaleRatio;
        }

        if (null !== $this->harmonyRatio) {
            $res['HarmonyRatio'] = $this->harmonyRatio;
        }

        if (null !== $this->iosActiveModels) {
            $res['IosActiveModels'] = $this->iosActiveModels;
        }

        if (null !== $this->iosRatio) {
            $res['IosRatio'] = $this->iosRatio;
        }

        if (null !== $this->maleRatio) {
            $res['MaleRatio'] = $this->maleRatio;
        }

        if (null !== $this->profileRemark) {
            $res['ProfileRemark'] = $this->profileRemark;
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
        if (isset($map['ActiveRegionCodes'])) {
            $model->activeRegionCodes = $map['ActiveRegionCodes'];
        }

        if (isset($map['ActiveRegions'])) {
            $model->activeRegions = $map['ActiveRegions'];
        }

        if (isset($map['AgeSegment'])) {
            $model->ageSegment = $map['AgeSegment'];
        }

        if (isset($map['AndroidActiveModels'])) {
            $model->androidActiveModels = $map['AndroidActiveModels'];
        }

        if (isset($map['AndroidRatio'])) {
            $model->androidRatio = $map['AndroidRatio'];
        }

        if (isset($map['FemaleRatio'])) {
            $model->femaleRatio = $map['FemaleRatio'];
        }

        if (isset($map['HarmonyRatio'])) {
            $model->harmonyRatio = $map['HarmonyRatio'];
        }

        if (isset($map['IosActiveModels'])) {
            $model->iosActiveModels = $map['IosActiveModels'];
        }

        if (isset($map['IosRatio'])) {
            $model->iosRatio = $map['IosRatio'];
        }

        if (isset($map['MaleRatio'])) {
            $model->maleRatio = $map['MaleRatio'];
        }

        if (isset($map['ProfileRemark'])) {
            $model->profileRemark = $map['ProfileRemark'];
        }

        return $model;
    }
}
