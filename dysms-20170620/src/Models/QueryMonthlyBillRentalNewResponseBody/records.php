<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillRentalNewResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $billTime;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var int
     */
    public $offerTime;

    /**
     * @var string
     */
    public $rental;

    /**
     * @var string
     */
    public $subItemId;

    /**
     * @var string
     */
    public $subItemName;
    protected $_name = [
        'billTime' => 'BillTime',
        'itemId' => 'ItemId',
        'itemName' => 'ItemName',
        'offerTime' => 'OfferTime',
        'rental' => 'Rental',
        'subItemId' => 'SubItemId',
        'subItemName' => 'SubItemName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billTime) {
            $res['BillTime'] = $this->billTime;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->offerTime) {
            $res['OfferTime'] = $this->offerTime;
        }

        if (null !== $this->rental) {
            $res['Rental'] = $this->rental;
        }

        if (null !== $this->subItemId) {
            $res['SubItemId'] = $this->subItemId;
        }

        if (null !== $this->subItemName) {
            $res['SubItemName'] = $this->subItemName;
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
        if (isset($map['BillTime'])) {
            $model->billTime = $map['BillTime'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['OfferTime'])) {
            $model->offerTime = $map['OfferTime'];
        }

        if (isset($map['Rental'])) {
            $model->rental = $map['Rental'];
        }

        if (isset($map['SubItemId'])) {
            $model->subItemId = $map['SubItemId'];
        }

        if (isset($map['SubItemName'])) {
            $model->subItemName = $map['SubItemName'];
        }

        return $model;
    }
}
