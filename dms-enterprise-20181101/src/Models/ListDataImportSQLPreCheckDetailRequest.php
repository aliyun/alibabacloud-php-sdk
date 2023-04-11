<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDataImportSQLPreCheckDetailRequest extends Model
{
    /**
     * @example 11****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumer;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example INSERT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $statusCode;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListDataImportSQLPreCheckDetailRequest
     */
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
