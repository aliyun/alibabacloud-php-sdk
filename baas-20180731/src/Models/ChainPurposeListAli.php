<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ChainPurposeListAli extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $extend;

    /**
     * @example 10001
     *
     * @var string
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $item;

    /**
     * @example FIN
     *
     * @var string
     */
    public $key;

    /**
     * @example 金融
     *
     * @var string
     */
    public $purpose;
    protected $_name = [
        'extend'  => 'Extend',
        'id'      => 'Id',
        'item'    => 'Item',
        'key'     => 'Key',
        'purpose' => 'Purpose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->purpose) {
            $res['Purpose'] = $this->purpose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChainPurposeListAli
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Purpose'])) {
            $model->purpose = $map['Purpose'];
        }

        return $model;
    }
}
