<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalDetailResponseBody\data\paginationResult;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example *.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @example Domain
     *
     * @var string
     */
    public $addressType;

    /**
     * @example 5
     *
     * @var string
     */
    public $groupId;

    /**
     * @example user_defined
     *
     * @var string
     */
    public $source;

    /**
     * @example 500
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'address'     => 'Address',
        'addressType' => 'AddressType',
        'groupId'     => 'GroupId',
        'source'      => 'Source',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
