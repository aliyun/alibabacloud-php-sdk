<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleResponseBody\filterExpression;

class QueryCostCenterRuleResponseBody extends Model
{
    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var filterExpression
     */
    public $filterExpression;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isDeleted;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $rootCostCenterId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'filterExpression' => 'FilterExpression',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isDeleted' => 'IsDeleted',
        'metadata' => 'Metadata',
        'ownerAccountId' => 'OwnerAccountId',
        'requestId' => 'RequestId',
        'rootCostCenterId' => 'RootCostCenterId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->filterExpression) {
            $this->filterExpression->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->filterExpression) {
            $res['FilterExpression'] = null !== $this->filterExpression ? $this->filterExpression->toArray($noStream) : $this->filterExpression;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rootCostCenterId) {
            $res['RootCostCenterId'] = $this->rootCostCenterId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['FilterExpression'])) {
            $model->filterExpression = filterExpression::fromMap($map['FilterExpression']);
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RootCostCenterId'])) {
            $model->rootCostCenterId = $map['RootCostCenterId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
