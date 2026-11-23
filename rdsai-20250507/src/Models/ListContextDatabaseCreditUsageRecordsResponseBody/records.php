<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseCreditUsageRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $credits;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $subItem;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'credits' => 'Credits',
        'item' => 'Item',
        'memberId' => 'MemberId',
        'quantity' => 'Quantity',
        'requestTime' => 'RequestTime',
        'subItem' => 'SubItem',
        'unit' => 'Unit',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credits) {
            $res['Credits'] = $this->credits;
        }

        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }

        if (null !== $this->subItem) {
            $res['SubItem'] = $this->subItem;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Credits'])) {
            $model->credits = $map['Credits'];
        }

        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }

        if (isset($map['SubItem'])) {
            $model->subItem = $map['SubItem'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
