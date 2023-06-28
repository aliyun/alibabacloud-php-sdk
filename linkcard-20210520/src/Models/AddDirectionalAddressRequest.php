<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class AddDirectionalAddressRequest extends Model
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
     * @example 10000002595
     *
     * @var string
     */
    public $groupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $msgNotify;

    /**
     * @example 123123
     *
     * @var string
     */
    public $serialNo;

    /**
     * @example user_defined
     *
     * @var string
     */
    public $source;

    /**
     * @var bool
     */
    public $urlInsecurityForce;
    protected $_name = [
        'address'            => 'Address',
        'addressType'        => 'AddressType',
        'groupId'            => 'GroupId',
        'msgNotify'          => 'MsgNotify',
        'serialNo'           => 'SerialNo',
        'source'             => 'Source',
        'urlInsecurityForce' => 'UrlInsecurityForce',
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
        if (null !== $this->msgNotify) {
            $res['MsgNotify'] = $this->msgNotify;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->urlInsecurityForce) {
            $res['UrlInsecurityForce'] = $this->urlInsecurityForce;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDirectionalAddressRequest
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
        if (isset($map['MsgNotify'])) {
            $model->msgNotify = $map['MsgNotify'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UrlInsecurityForce'])) {
            $model->urlInsecurityForce = $map['UrlInsecurityForce'];
        }

        return $model;
    }
}
