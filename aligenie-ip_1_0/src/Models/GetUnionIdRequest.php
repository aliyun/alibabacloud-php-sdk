<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetUnionIdRequest extends Model
{
    /**
     * @example 125****0946
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example HOTEL
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example 62a319****abdc
     *
     * @var string
     */
    public $id;

    /**
     * @example DEVICE_ID
     *
     * @var string
     */
    public $idType;
    protected $_name = [
        'encodeKey'  => 'EncodeKey',
        'encodeType' => 'EncodeType',
        'id'         => 'Id',
        'idType'     => 'IdType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUnionIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        return $model;
    }
}
