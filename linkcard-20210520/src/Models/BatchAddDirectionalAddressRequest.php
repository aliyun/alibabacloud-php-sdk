<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDirectionalAddressRequest extends Model
{
    /**
     * @example Domain
     *
     * @var string
     */
    public $addressType;

    /**
     * @example 5
     *
     * @var int
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $listAddress;

    /**
     * @example user_defined
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'addressType' => 'AddressType',
        'groupId'     => 'GroupId',
        'listAddress' => 'ListAddress',
        'source'      => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->listAddress) {
            $res['ListAddress'] = $this->listAddress;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDirectionalAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ListAddress'])) {
            if (!empty($map['ListAddress'])) {
                $model->listAddress = $map['ListAddress'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
