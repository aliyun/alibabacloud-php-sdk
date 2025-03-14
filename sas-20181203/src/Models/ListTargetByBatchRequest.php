<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListTargetByBatchRequest extends Model
{
    /**
     * @description The ID of the release batch.
     *
     * @example 1371
     *
     * @var int
     */
    public $batchId;

    /**
     * @description The page number of the current page in a paginated query.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Asset selection dimension. Values:
     *
     * - **0**: Machine instance
     * - **1**: Machine group
     * - **2**: VPC instance ID
     *
     * @example 0
     *
     * @var int
     */
    public $operationBase;

    /**
     * @description The maximum number of items to return per page in a paginated query.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'batchId' => 'BatchId',
        'currentPage' => 'CurrentPage',
        'operationBase' => 'OperationBase',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->operationBase) {
            $res['OperationBase'] = $this->operationBase;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTargetByBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OperationBase'])) {
            $model->operationBase = $map['OperationBase'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
