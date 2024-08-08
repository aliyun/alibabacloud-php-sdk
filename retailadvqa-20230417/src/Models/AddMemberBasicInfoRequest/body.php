<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoRequest;

use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoRequest\body\channels;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @example 2022-09-08
     *
     * @var string
     */
    public $birthday;

    /**
     * @description This parameter is required.
     *
     * @var channels[]
     */
    public $channels;

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
     * @example ""
     *
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $gmtCreate;

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
    public $mixMobile;

    /**
     * @example 17716699087
     *
     * @var string
     */
    public $mobile;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platFormType;

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
        'channels'       => 'Channels',
        'city'           => 'City',
        'country'        => 'Country',
        'email'          => 'Email',
        'extra'          => 'Extra',
        'gmtCreate'      => 'GmtCreate',
        'memberName'     => 'MemberName',
        'memberNickName' => 'MemberNickName',
        'mixMobile'      => 'MixMobile',
        'mobile'         => 'Mobile',
        'openMerchantId' => 'OpenMerchantId',
        'platFormType'   => 'PlatFormType',
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
        if (null !== $this->channels) {
            $res['Channels'] = [];
            if (null !== $this->channels && \is_array($this->channels)) {
                $n = 0;
                foreach ($this->channels as $item) {
                    $res['Channels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberNickName) {
            $res['MemberNickName'] = $this->memberNickName;
        }
        if (null !== $this->mixMobile) {
            $res['MixMobile'] = $this->mixMobile;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->platFormType) {
            $res['PlatFormType'] = $this->platFormType;
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
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = [];
                $n               = 0;
                foreach ($map['Channels'] as $item) {
                    $model->channels[$n++] = null !== $item ? channels::fromMap($item) : $item;
                }
            }
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberNickName'])) {
            $model->memberNickName = $map['MemberNickName'];
        }
        if (isset($map['MixMobile'])) {
            $model->mixMobile = $map['MixMobile'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['PlatFormType'])) {
            $model->platFormType = $map['PlatFormType'];
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
