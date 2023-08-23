<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class RemoveChildAccountAuthRequest extends Model
{
    /**
     * @example 30**53
     *
     * @var string
     */
    public $appKey;

    /**
     * @example tbxxxx
     *
     * @var string
     */
    public $childAccountName;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example AAEV***E3d3Z2ETwh
     *
     * @var string
     */
    public $tbOpenId;
    protected $_name = [
        'appKey'           => 'AppKey',
        'childAccountName' => 'ChildAccountName',
        'hotelId'          => 'HotelId',
        'tbOpenId'         => 'TbOpenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->childAccountName) {
            $res['ChildAccountName'] = $this->childAccountName;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->tbOpenId) {
            $res['TbOpenId'] = $this->tbOpenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveChildAccountAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['ChildAccountName'])) {
            $model->childAccountName = $map['ChildAccountName'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['TbOpenId'])) {
            $model->tbOpenId = $map['TbOpenId'];
        }

        return $model;
    }
}
