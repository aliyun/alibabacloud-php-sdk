<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ChannelCorpCreateRequest extends Model
{
    /**
     * @var string
     */
    public $administratorEmail;

    /**
     * @var string
     */
    public $administratorName;

    /**
     * @var string
     */
    public $administratorPhone;

    /**
     * @var string
     */
    public $baseCurrency;

    /**
     * @var string
     */
    public $btripRegion;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $corpNameEn;

    /**
     * @var string
     */
    public $extendField;

    /**
     * @var string
     */
    public $province;

    /**
     * @var int
     */
    public $scope;

    /**
     * @var string
     */
    public $thirdCorpId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'administratorEmail' => 'administrator_email',
        'administratorName' => 'administrator_name',
        'administratorPhone' => 'administrator_phone',
        'baseCurrency' => 'base_currency',
        'btripRegion' => 'btrip_region',
        'city' => 'city',
        'corpName' => 'corp_name',
        'corpNameEn' => 'corp_name_en',
        'extendField' => 'extend_field',
        'province' => 'province',
        'scope' => 'scope',
        'thirdCorpId' => 'third_corp_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->administratorEmail) {
            $res['administrator_email'] = $this->administratorEmail;
        }

        if (null !== $this->administratorName) {
            $res['administrator_name'] = $this->administratorName;
        }

        if (null !== $this->administratorPhone) {
            $res['administrator_phone'] = $this->administratorPhone;
        }

        if (null !== $this->baseCurrency) {
            $res['base_currency'] = $this->baseCurrency;
        }

        if (null !== $this->btripRegion) {
            $res['btrip_region'] = $this->btripRegion;
        }

        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->corpNameEn) {
            $res['corp_name_en'] = $this->corpNameEn;
        }

        if (null !== $this->extendField) {
            $res['extend_field'] = $this->extendField;
        }

        if (null !== $this->province) {
            $res['province'] = $this->province;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->thirdCorpId) {
            $res['third_corp_id'] = $this->thirdCorpId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['administrator_email'])) {
            $model->administratorEmail = $map['administrator_email'];
        }

        if (isset($map['administrator_name'])) {
            $model->administratorName = $map['administrator_name'];
        }

        if (isset($map['administrator_phone'])) {
            $model->administratorPhone = $map['administrator_phone'];
        }

        if (isset($map['base_currency'])) {
            $model->baseCurrency = $map['base_currency'];
        }

        if (isset($map['btrip_region'])) {
            $model->btripRegion = $map['btrip_region'];
        }

        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['corp_name_en'])) {
            $model->corpNameEn = $map['corp_name_en'];
        }

        if (isset($map['extend_field'])) {
            $model->extendField = $map['extend_field'];
        }

        if (isset($map['province'])) {
            $model->province = $map['province'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['third_corp_id'])) {
            $model->thirdCorpId = $map['third_corp_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
