<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetDataImportSQLRequest extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $sqlId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId' => 'OrderId',
        'sqlId' => 'SqlId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
