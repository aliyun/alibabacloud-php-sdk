<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ExecuteBatchTaskResponseBody extends Model
{
    /**
     * @var int
     */
    public $failNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successNumber;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'failNumber' => 'failNumber',
        'requestId' => 'requestId',
        'successNumber' => 'successNumber',
        'total' => 'total',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failNumber) {
            $res['failNumber'] = $this->failNumber;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->successNumber) {
            $res['successNumber'] = $this->successNumber;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['failNumber'])) {
            $model->failNumber = $map['failNumber'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['successNumber'])) {
            $model->successNumber = $map['successNumber'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
