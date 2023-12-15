<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ChainPurpose extends Model
{
    /**
     * @var bool
     */
    public $extend;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $item;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $purposeItem;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'extend'      => 'Extend',
        'id'          => 'Id',
        'item'        => 'Item',
        'key'         => 'Key',
        'name'        => 'Name',
        'purposeItem' => 'PurposeItem',
        'status'      => 'Status',
        'time'        => 'Time',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->purposeItem) {
            $res['PurposeItem'] = $this->purposeItem;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChainPurpose
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PurposeItem'])) {
            $model->purposeItem = $map['PurposeItem'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
