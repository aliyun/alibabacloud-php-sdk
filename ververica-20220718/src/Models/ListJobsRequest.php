<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @description The deployment ID.
     *
     * This parameter is required.
     * @example 58718c99-3b29-4c5e-93bb-c9fc4ec6****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @description The page number. Minimum value: 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The collation.
     *
     * Valid values:
     *
     *   gmt_create
     *   job_id
     *   status
     *
     * @example gmt_create
     *
     * @var string
     */
    public $sortName;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'pageIndex'    => 'pageIndex',
        'pageSize'     => 'pageSize',
        'sortName'     => 'sortName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->sortName) {
            $res['sortName'] = $this->sortName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['sortName'])) {
            $model->sortName = $map['sortName'];
        }

        return $model;
    }
}
