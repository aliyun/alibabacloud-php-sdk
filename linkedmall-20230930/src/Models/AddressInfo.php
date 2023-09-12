<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class AddressInfo extends Model
{
    /**
     * @example 陕西省西安市新城区xxx大厦xx室
     *
     * @var string
     */
    public $addressDetail;

    /**
     * @example 0
     *
     * @var int
     */
    public $addressId;

    /**
     * @example 610102
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @example 任先生
     *
     * @var string
     */
    public $receiver;

    /**
     * @example 182***5674
     *
     * @var string
     */
    public $receiverPhone;

    /**
     * @example 61010212
     *
     * @var string
     */
    public $townDivisionCode;
    protected $_name = [
        'addressDetail'    => 'addressDetail',
        'addressId'        => 'addressId',
        'divisionCode'     => 'divisionCode',
        'receiver'         => 'receiver',
        'receiverPhone'    => 'receiverPhone',
        'townDivisionCode' => 'townDivisionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressDetail) {
            $res['addressDetail'] = $this->addressDetail;
        }
        if (null !== $this->addressId) {
            $res['addressId'] = $this->addressId;
        }
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->receiver) {
            $res['receiver'] = $this->receiver;
        }
        if (null !== $this->receiverPhone) {
            $res['receiverPhone'] = $this->receiverPhone;
        }
        if (null !== $this->townDivisionCode) {
            $res['townDivisionCode'] = $this->townDivisionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddressInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addressDetail'])) {
            $model->addressDetail = $map['addressDetail'];
        }
        if (isset($map['addressId'])) {
            $model->addressId = $map['addressId'];
        }
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }
        if (isset($map['receiver'])) {
            $model->receiver = $map['receiver'];
        }
        if (isset($map['receiverPhone'])) {
            $model->receiverPhone = $map['receiverPhone'];
        }
        if (isset($map['townDivisionCode'])) {
            $model->townDivisionCode = $map['townDivisionCode'];
        }

        return $model;
    }
}
