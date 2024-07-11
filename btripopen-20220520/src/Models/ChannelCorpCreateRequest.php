<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ChannelCorpCreateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $administratorName;

    /**
     * @description This parameter is required.
     *
     * @example 18378889782
     *
     * @var string
     */
    public $administratorPhone;

    /**
     * @var string
     */
    public $city;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $province;

    /**
     * @example 1
     *
     * @var int
     */
    public $scope;

    /**
     * @description This parameter is required.
     *
     * @example 00001
     *
     * @var string
     */
    public $thirdCorpId;
    protected $_name = [
        'administratorName'  => 'administrator_name',
        'administratorPhone' => 'administrator_phone',
        'city'               => 'city',
        'corpName'           => 'corp_name',
        'province'           => 'province',
        'scope'              => 'scope',
        'thirdCorpId'        => 'third_corp_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->administratorName) {
            $res['administrator_name'] = $this->administratorName;
        }
        if (null !== $this->administratorPhone) {
            $res['administrator_phone'] = $this->administratorPhone;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChannelCorpCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['administrator_name'])) {
            $model->administratorName = $map['administrator_name'];
        }
        if (isset($map['administrator_phone'])) {
            $model->administratorPhone = $map['administrator_phone'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
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

        return $model;
    }
}
