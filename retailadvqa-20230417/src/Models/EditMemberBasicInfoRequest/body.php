<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\EditMemberBasicInfoRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @example xxx.jpg
     *
     * @var string
     */
    public $avatar;

    /**
     * @example 2024-06-20
     *
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
     * @example xxx.com
     *
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $memberNickName;

    /**
     * @description This parameter is required.
     *
     * @example ***********
     *
     * @var string
     */
    public $mobile;

    /**
     * @description This parameter is required.
     *
     * @example 1230094
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @example TAOBAO
     *
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $sex;
    protected $_name = [
        'area'           => 'Area',
        'avatar'         => 'Avatar',
        'birthday'       => 'Birthday',
        'city'           => 'City',
        'country'        => 'Country',
        'email'          => 'Email',
        'memberName'     => 'MemberName',
        'memberNickName' => 'MemberNickName',
        'mobile'         => 'Mobile',
        'openMerchantId' => 'OpenMerchantId',
        'platformType'   => 'PlatformType',
        'province'       => 'Province',
        'sex'            => 'Sex',
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
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberNickName) {
            $res['MemberNickName'] = $this->memberNickName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
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
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberNickName'])) {
            $model->memberNickName = $map['MemberNickName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }

        return $model;
    }
}
