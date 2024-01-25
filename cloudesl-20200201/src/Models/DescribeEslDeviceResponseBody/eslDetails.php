<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class eslDetails extends Model
{
    /**
     * @var string
     */
    public $eslBarCode;

    /**
     * @var int
     */
    public $itemBarCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemShortTitle;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storeId;
    protected $_name = [
        'eslBarCode'     => 'EslBarCode',
        'itemBarCode'    => 'ItemBarCode',
        'itemId'         => 'ItemId',
        'itemShortTitle' => 'ItemShortTitle',
        'lastUpdateTime' => 'LastUpdateTime',
        'status'         => 'Status',
        'storeId'        => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemShortTitle) {
            $res['ItemShortTitle'] = $this->itemShortTitle;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eslDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemShortTitle'])) {
            $model->itemShortTitle = $map['ItemShortTitle'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
