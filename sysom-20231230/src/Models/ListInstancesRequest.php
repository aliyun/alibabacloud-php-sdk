<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'clusterId' => 'cluster_id',
        'current' => 'current',
        'instance' => 'instance',
        'pageSize' => 'pageSize',
        'region' => 'region',
        'status' => 'status',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
