<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListDataImportSQLPreCheckDetailRequest extends Model
{
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var int
     */
    public $pageNumer;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sqlType;
    /**
     * @var string
     */
    public $statusCode;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId'    => 'OrderId',
        'pageNumer'  => 'PageNumer',
        'pageSize'   => 'PageSize',
        'sqlType'    => 'SqlType',
        'statusCode' => 'StatusCode',
        'tid'        => 'Tid',
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

        if (null !== $this->pageNumer) {
            $res['PageNumer'] = $this->pageNumer;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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

        if (isset($map['PageNumer'])) {
            $model->pageNumer = $map['PageNumer'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
