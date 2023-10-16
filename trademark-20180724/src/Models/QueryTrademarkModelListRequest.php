<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkModelListRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $orderIdsStr;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $produceTypesStr;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitStart;

    /**
     * @var string
     */
    public $submitStatus;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'env'             => 'Env',
        'orderIdsStr'     => 'OrderIdsStr',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'principalKey'    => 'PrincipalKey',
        'principalName'   => 'PrincipalName',
        'produceTypesStr' => 'ProduceTypesStr',
        'status'          => 'Status',
        'submitStart'     => 'SubmitStart',
        'submitStatus'    => 'SubmitStatus',
        'submitTime'      => 'SubmitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->orderIdsStr) {
            $res['OrderIdsStr'] = $this->orderIdsStr;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->produceTypesStr) {
            $res['ProduceTypesStr'] = $this->produceTypesStr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitStart) {
            $res['SubmitStart'] = $this->submitStart;
        }
        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkModelListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OrderIdsStr'])) {
            $model->orderIdsStr = $map['OrderIdsStr'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['ProduceTypesStr'])) {
            $model->produceTypesStr = $map['ProduceTypesStr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitStart'])) {
            $model->submitStart = $map['SubmitStart'];
        }
        if (isset($map['SubmitStatus'])) {
            $model->submitStatus = $map['SubmitStatus'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
