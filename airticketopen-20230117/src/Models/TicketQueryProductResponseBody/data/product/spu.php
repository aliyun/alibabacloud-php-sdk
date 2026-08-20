<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product;

use AlibabaCloud\Dara\Model;

class spu extends Model
{
    /**
     * @var string
     */
    public $primaryTypeName;

    /**
     * @var string
     */
    public $reserveDetail;

    /**
     * @var string
     */
    public $reserveTitle;

    /**
     * @var string
     */
    public $secondaryTypeName;

    /**
     * @var int
     */
    public $spuId;

    /**
     * @var string
     */
    public $spuName;
    protected $_name = [
        'primaryTypeName' => 'PrimaryTypeName',
        'reserveDetail' => 'ReserveDetail',
        'reserveTitle' => 'ReserveTitle',
        'secondaryTypeName' => 'SecondaryTypeName',
        'spuId' => 'SpuId',
        'spuName' => 'SpuName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->primaryTypeName) {
            $res['PrimaryTypeName'] = $this->primaryTypeName;
        }

        if (null !== $this->reserveDetail) {
            $res['ReserveDetail'] = $this->reserveDetail;
        }

        if (null !== $this->reserveTitle) {
            $res['ReserveTitle'] = $this->reserveTitle;
        }

        if (null !== $this->secondaryTypeName) {
            $res['SecondaryTypeName'] = $this->secondaryTypeName;
        }

        if (null !== $this->spuId) {
            $res['SpuId'] = $this->spuId;
        }

        if (null !== $this->spuName) {
            $res['SpuName'] = $this->spuName;
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
        if (isset($map['PrimaryTypeName'])) {
            $model->primaryTypeName = $map['PrimaryTypeName'];
        }

        if (isset($map['ReserveDetail'])) {
            $model->reserveDetail = $map['ReserveDetail'];
        }

        if (isset($map['ReserveTitle'])) {
            $model->reserveTitle = $map['ReserveTitle'];
        }

        if (isset($map['SecondaryTypeName'])) {
            $model->secondaryTypeName = $map['SecondaryTypeName'];
        }

        if (isset($map['SpuId'])) {
            $model->spuId = $map['SpuId'];
        }

        if (isset($map['SpuName'])) {
            $model->spuName = $map['SpuName'];
        }

        return $model;
    }
}
