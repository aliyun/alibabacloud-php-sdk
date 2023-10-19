<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateCommerceSettingRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $cartEnable;

    /**
     * @example false
     *
     * @var bool
     */
    public $catalogVisible;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 手机号码
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'cartEnable'     => 'CartEnable',
        'catalogVisible' => 'CatalogVisible',
        'custSpaceId'    => 'CustSpaceId',
        'phoneNumber'    => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cartEnable) {
            $res['CartEnable'] = $this->cartEnable;
        }
        if (null !== $this->catalogVisible) {
            $res['CatalogVisible'] = $this->catalogVisible;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCommerceSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CartEnable'])) {
            $model->cartEnable = $map['CartEnable'];
        }
        if (isset($map['CatalogVisible'])) {
            $model->catalogVisible = $map['CatalogVisible'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
