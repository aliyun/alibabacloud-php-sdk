<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest\consigneeInfo\addressInfo;
use AlibabaCloud\Tea\Model;

class consigneeInfo extends Model
{
    /**
     * @description The address of the consignee.
     *
     * @var addressInfo
     */
    public $addressInfo;

    /**
     * @description The mobile phone number of the consignee.
     *
     * This parameter is required.
     * @example 1390000****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The name of the consignee.
     *
     * This parameter is required.
     * @example Li
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'addressInfo' => 'AddressInfo',
        'mobile'      => 'Mobile',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressInfo) {
            $res['AddressInfo'] = null !== $this->addressInfo ? $this->addressInfo->toMap() : null;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consigneeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressInfo'])) {
            $model->addressInfo = addressInfo::fromMap($map['AddressInfo']);
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
