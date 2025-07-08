<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillRentalResponseBody\data;

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
        'billTime' => 'billTime',
        'itemId' => 'itemId',
        'itemName' => 'itemName',
        'offerTime' => 'offerTime',
        'rental' => 'rental',
        'subItemId' => 'subItemId',
        'subItemName' => 'subItemName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billTime) {
            $res['billTime'] = $this->billTime;
        }

        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }

        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }

        if (null !== $this->offerTime) {
            $res['offerTime'] = $this->offerTime;
        }

        if (null !== $this->rental) {
            $res['rental'] = $this->rental;
        }

        if (null !== $this->subItemId) {
            $res['subItemId'] = $this->subItemId;
        }

        if (null !== $this->subItemName) {
            $res['subItemName'] = $this->subItemName;
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
        if (isset($map['billTime'])) {
            $model->billTime = $map['billTime'];
        }

        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }

        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }

        if (isset($map['offerTime'])) {
            $model->offerTime = $map['offerTime'];
        }

        if (isset($map['rental'])) {
            $model->rental = $map['rental'];
        }

        if (isset($map['subItemId'])) {
            $model->subItemId = $map['subItemId'];
        }

        if (isset($map['subItemName'])) {
            $model->subItemName = $map['subItemName'];
        }

        return $model;
    }
}
