<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\QueryMemberBasicInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $levelNum;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $memberNickName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nearExpiredScore;

    /**
     * @var string
     */
    public $openMerchantId;

    /**
     * @var string
     */
    public $outerMemberId;

    /**
     * @var string
     */
    public $points;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $sex;
    protected $_name = [
        'area'             => 'Area',
        'avatar'           => 'Avatar',
        'birthday'         => 'Birthday',
        'city'             => 'City',
        'country'          => 'Country',
        'email'            => 'Email',
        'extra'            => 'Extra',
        'levelName'        => 'LevelName',
        'levelNum'         => 'LevelNum',
        'memberName'       => 'MemberName',
        'memberNickName'   => 'MemberNickName',
        'mobile'           => 'Mobile',
        'nearExpiredScore' => 'NearExpiredScore',
        'openMerchantId'   => 'OpenMerchantId',
        'outerMemberId'    => 'OuterMemberId',
        'points'           => 'Points',
        'province'         => 'Province',
        'score'            => 'Score',
        'sex'              => 'Sex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->birthday) {
            $res['Birthday'] = $this->birthday;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }
        if (null !== $this->levelNum) {
            $res['LevelNum'] = $this->levelNum;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberNickName) {
            $res['MemberNickName'] = $this->memberNickName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->nearExpiredScore) {
            $res['NearExpiredScore'] = $this->nearExpiredScore;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->outerMemberId) {
            $res['OuterMemberId'] = $this->outerMemberId;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Birthday'])) {
            $model->birthday = $map['Birthday'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }
        if (isset($map['LevelNum'])) {
            $model->levelNum = $map['LevelNum'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberNickName'])) {
            $model->memberNickName = $map['MemberNickName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['NearExpiredScore'])) {
            $model->nearExpiredScore = $map['NearExpiredScore'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OuterMemberId'])) {
            $model->outerMemberId = $map['OuterMemberId'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }

        return $model;
    }
}
