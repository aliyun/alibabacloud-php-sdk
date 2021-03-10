<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class DescribeOrderInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderLevel;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $num;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $beginDate;
    protected $_name = [
        'orderLevel' => 'OrderLevel',
        'requestId'  => 'RequestId',
        'num'        => 'Num',
        'endDate'    => 'EndDate',
        'bizCode'    => 'BizCode',
        'beginDate'  => 'BeginDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderLevel) {
            $res['OrderLevel'] = $this->orderLevel;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrderInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderLevel'])) {
            $model->orderLevel = $map['OrderLevel'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        return $model;
    }
}
