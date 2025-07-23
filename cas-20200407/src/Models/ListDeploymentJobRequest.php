<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListDeploymentJobRequest extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the deployment task.
     *
     * Valid values:
     *
     *   cloud: multi-cloud deployment task.
     *   user: cloud service deployment task. This type of task does not support Elastic Compute Service (ECS) instances.
     *
     * @example user
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The number of certificates per page. Default value: **50**.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The status of the deployment task.
     *
     * Valid values:
     *
     *   success
     *   pending
     *   scheduling
     *   processing
     *   error
     *   editing
     *
     * @example pending
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'jobType' => 'JobType',
        'showSize' => 'ShowSize',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
     * @return ListDeploymentJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
