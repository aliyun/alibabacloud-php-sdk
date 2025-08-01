<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListPluginsInstancesRequest extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $current;

    /**
     * @example i-bpxx
     *
     * @var string
     */
    public $instanceIdName;

    /**
     * @example {"key":"app","value":"sysom-aliyun-com"}
     *
     * @var string
     */
    public $instanceTag;

    /**
     * @description This parameter is required.
     *
     * @example install
     *
     * @var string
     */
    public $operationType;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 74a86327-3170-412c-8e67-da3389ec56a9
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'current' => 'current',
        'instanceIdName' => 'instance_id_name',
        'instanceTag' => 'instance_tag',
        'operationType' => 'operation_type',
        'pageSize' => 'pageSize',
        'pluginId' => 'plugin_id',
        'region' => 'region',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->instanceIdName) {
            $res['instance_id_name'] = $this->instanceIdName;
        }
        if (null !== $this->instanceTag) {
            $res['instance_tag'] = $this->instanceTag;
        }
        if (null !== $this->operationType) {
            $res['operation_type'] = $this->operationType;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginId) {
            $res['plugin_id'] = $this->pluginId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPluginsInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['instance_id_name'])) {
            $model->instanceIdName = $map['instance_id_name'];
        }
        if (isset($map['instance_tag'])) {
            $model->instanceTag = $map['instance_tag'];
        }
        if (isset($map['operation_type'])) {
            $model->operationType = $map['operation_type'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['plugin_id'])) {
            $model->pluginId = $map['plugin_id'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
