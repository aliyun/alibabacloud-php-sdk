<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListWorkerResourceRequest extends Model
{
    /**
     * @description The cloud service in the deployment task.
     *
     * @example NLB
     *
     * @var string
     */
    public $cloudProduct;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the deployment task. You can call the [CreateDeploymentJob](https://help.aliyun.com/document_detail/2712234.html) operation to obtain the ID of a deployment task from the **ID** parameter. You can also call the [ListDeploymentJob](https://help.aliyun.com/document_detail/2712223.html) operation to obtain the ID of a deployment task.
     *
     * This parameter is required.
     * @example 8888
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The number of entries per page. Default value: 50.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The status of the worker task.
     *
     * Valid values:
     *
     *   rollback
     *   rollback_error
     *   success
     *   rollback_success
     *   pending
     *   scheduling
     *   processing
     *   error
     *   editing
     *
     * @example editing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cloudProduct' => 'CloudProduct',
        'currentPage'  => 'CurrentPage',
        'jobId'        => 'JobId',
        'showSize'     => 'ShowSize',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkerResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
