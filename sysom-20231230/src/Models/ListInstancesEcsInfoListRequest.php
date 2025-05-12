<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesEcsInfoListRequest extends Model
{
    /**
     * @var string
     */
    public $infoType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'infoType' => 'info_type',
        'instanceId' => 'instance_id',
        'managedType' => 'managed_type',
        'pluginId' => 'plugin_id',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoType) {
            $res['info_type'] = $this->infoType;
        }

        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        if (null !== $this->managedType) {
            $res['managed_type'] = $this->managedType;
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
        if (isset($map['info_type'])) {
            $model->infoType = $map['info_type'];
        }

        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        if (isset($map['managed_type'])) {
            $model->managedType = $map['managed_type'];
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
