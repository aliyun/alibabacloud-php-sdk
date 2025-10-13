<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class ScaleInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $coldStorageSize;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var bool
     */
    public $enableServerlessComputing;

    /**
     * @var int
     */
    public $gatewayCount;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'coldStorageSize' => 'coldStorageSize',
        'cpu' => 'cpu',
        'enableServerlessComputing' => 'enableServerlessComputing',
        'gatewayCount' => 'gatewayCount',
        'scaleType' => 'scaleType',
        'storageSize' => 'storageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldStorageSize) {
            $res['coldStorageSize'] = $this->coldStorageSize;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->enableServerlessComputing) {
            $res['enableServerlessComputing'] = $this->enableServerlessComputing;
        }

        if (null !== $this->gatewayCount) {
            $res['gatewayCount'] = $this->gatewayCount;
        }

        if (null !== $this->scaleType) {
            $res['scaleType'] = $this->scaleType;
        }

        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['coldStorageSize'])) {
            $model->coldStorageSize = $map['coldStorageSize'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['enableServerlessComputing'])) {
            $model->enableServerlessComputing = $map['enableServerlessComputing'];
        }

        if (isset($map['gatewayCount'])) {
            $model->gatewayCount = $map['gatewayCount'];
        }

        if (isset($map['scaleType'])) {
            $model->scaleType = $map['scaleType'];
        }

        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }

        return $model;
    }
}
