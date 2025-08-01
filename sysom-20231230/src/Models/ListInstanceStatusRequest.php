<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceStatusRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example i-wz9b9vucz1iubsz355rh
     *
     * @var string
     */
    public $instance;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'current' => 'current',
        'instance' => 'instance',
        'pageSize' => 'pageSize',
        'region' => 'region',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
