<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ChainPurposeInfoAli extends Model
{
    /**
     * @var string
     */
    public $chainPurposeExtend;

    /**
     * @var string
     */
    public $chainPurposeItem;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $purpose;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'chainPurposeExtend' => 'ChainPurposeExtend',
        'chainPurposeItem'   => 'ChainPurposeItem',
        'id'                 => 'Id',
        'key'                => 'Key',
        'purpose'            => 'Purpose',
        'status'             => 'Status',
        'time'               => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainPurposeExtend) {
            $res['ChainPurposeExtend'] = $this->chainPurposeExtend;
        }
        if (null !== $this->chainPurposeItem) {
            $res['ChainPurposeItem'] = $this->chainPurposeItem;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->purpose) {
            $res['Purpose'] = $this->purpose;
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
     * @return ChainPurposeInfoAli
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainPurposeExtend'])) {
            $model->chainPurposeExtend = $map['ChainPurposeExtend'];
        }
        if (isset($map['ChainPurposeItem'])) {
            $model->chainPurposeItem = $map['ChainPurposeItem'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Purpose'])) {
            $model->purpose = $map['Purpose'];
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
