<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ListDeploymentsRequest extends Model
{
    /**
     * @description The ID of the user who creates the deployment.
     *
     * @example 183899668*******
     *
     * @var string
     */
    public $creator;

    /**
     * @description The execution mode of the deployment.
     *
     * Valid values:
     *
     *   BATCH
     *   STREAMING
     *
     * @example STREAMING
     *
     * @var string
     */
    public $executionMode;

    /**
     * @description The tag key.
     *
     * @example key
     *
     * @var string
     */
    public $labelKey;

    /**
     * @description The tag value. Separate multiple values with semicolon (;).
     *
     * @example value1,value2
     *
     * @var string
     */
    public $labelValueArray;

    /**
     * @description The ID of the user who modifies the deployment.
     *
     * @example 183899668*******
     *
     * @var string
     */
    public $modifier;

    /**
     * @description The name of the deployment.
     *
     * @example vvp_ds_0522
     *
     * @var string
     */
    public $name;

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
     * @description The latest status of the deployment.
     *
     * Valid values:
     *
     *   CANCELLED
     *   FAILED
     *   RUNNING
     *   TRANSITIONING
     *   FINISHED
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creator'         => 'creator',
        'executionMode'   => 'executionMode',
        'labelKey'        => 'labelKey',
        'labelValueArray' => 'labelValueArray',
        'modifier'        => 'modifier',
        'name'            => 'name',
        'pageIndex'       => 'pageIndex',
        'pageSize'        => 'pageSize',
        'status'          => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->executionMode) {
            $res['executionMode'] = $this->executionMode;
        }
        if (null !== $this->labelKey) {
            $res['labelKey'] = $this->labelKey;
        }
        if (null !== $this->labelValueArray) {
            $res['labelValueArray'] = $this->labelValueArray;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeploymentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['executionMode'])) {
            $model->executionMode = $map['executionMode'];
        }
        if (isset($map['labelKey'])) {
            $model->labelKey = $map['labelKey'];
        }
        if (isset($map['labelValueArray'])) {
            $model->labelValueArray = $map['labelValueArray'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
