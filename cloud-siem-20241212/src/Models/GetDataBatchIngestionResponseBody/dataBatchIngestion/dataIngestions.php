<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataBatchIngestionResponseBody\dataBatchIngestion;

use AlibabaCloud\Dara\Model;

class dataIngestions extends Model
{
    /**
     * @var string
     */
    public $dataIngestionId;

    /**
     * @var string
     */
    public $dataIngestionStatus;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $vendorId;
    protected $_name = [
        'dataIngestionId' => 'DataIngestionId',
        'dataIngestionStatus' => 'DataIngestionStatus',
        'dataSourceId' => 'DataSourceId',
        'productId' => 'ProductId',
        'vendorId' => 'VendorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestionId) {
            $res['DataIngestionId'] = $this->dataIngestionId;
        }

        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->vendorId) {
            $res['VendorId'] = $this->vendorId;
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
        if (isset($map['DataIngestionId'])) {
            $model->dataIngestionId = $map['DataIngestionId'];
        }

        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['VendorId'])) {
            $model->vendorId = $map['VendorId'];
        }

        return $model;
    }
}
