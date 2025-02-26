<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListPluginsInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $current;
    /**
     * @var string
     */
    public $instanceIdName;
    /**
     * @var string
     */
    public $instanceTag;
    /**
     * @var string
     */
    public $operationType;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $pluginId;
    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'current'        => 'current',
        'instanceIdName' => 'instance_id_name',
        'instanceTag'    => 'instance_tag',
        'operationType'  => 'operation_type',
        'pageSize'       => 'pageSize',
        'pluginId'       => 'plugin_id',
        'region'         => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
