<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DataValue extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $purchaseStatus;

    /**
     * @var string
     */
    public $expiredOn;
    protected $_name = [
        'itemId' => 'ItemId',
        'businessType' => 'BusinessType',
        'appName' => 'AppName',
        'status' => 'Status',
        'purchaseStatus' => 'PurchaseStatus',
        'expiredOn' => 'ExpiredOn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->purchaseStatus) {
            $res['PurchaseStatus'] = $this->purchaseStatus;
        }

        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['PurchaseStatus'])) {
            $model->purchaseStatus = $map['PurchaseStatus'];
        }

        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }

        return $model;
    }
}
