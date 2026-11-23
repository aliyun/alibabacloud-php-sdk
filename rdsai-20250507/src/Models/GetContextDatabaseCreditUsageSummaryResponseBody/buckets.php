<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseCreditUsageSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class buckets extends Model
{
    /**
     * @var string
     */
    public $bucketStart;

    /**
     * @var string
     */
    public $credits;

    /**
     * @var string
     */
    public $item;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var string
     */
    public $subItem;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'bucketStart' => 'BucketStart',
        'credits' => 'Credits',
        'item' => 'Item',
        'quantity' => 'Quantity',
        'recordCount' => 'RecordCount',
        'subItem' => 'SubItem',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketStart) {
            $res['BucketStart'] = $this->bucketStart;
        }

        if (null !== $this->credits) {
            $res['Credits'] = $this->credits;
        }

        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }

        if (null !== $this->subItem) {
            $res['SubItem'] = $this->subItem;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['BucketStart'])) {
            $model->bucketStart = $map['BucketStart'];
        }

        if (isset($map['Credits'])) {
            $model->credits = $map['Credits'];
        }

        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }

        if (isset($map['SubItem'])) {
            $model->subItem = $map['SubItem'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
