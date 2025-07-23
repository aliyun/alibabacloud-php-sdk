<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleDataSource\dsList;
use AlibabaCloud\Tea\Model;

class AlertRuleDataSource extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var dsList[]
     */
    public $dsList;

    /**
     * @description 实例id，当type=PROMETHEUS_DS/ENTERPRISE_DS时必填，为prometheus实例的clusterId或指标仓库名称
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 数据源类型
     *
     * This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appType' => 'appType',
        'dsList' => 'dsList',
        'instanceId' => 'instanceId',
        'namespace' => 'namespace',
        'regionId' => 'regionId',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
        }
        if (null !== $this->dsList) {
            $res['dsList'] = [];
            if (null !== $this->dsList && \is_array($this->dsList)) {
                $n = 0;
                foreach ($this->dsList as $item) {
                    $res['dsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleDataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
        }
        if (isset($map['dsList'])) {
            if (!empty($map['dsList'])) {
                $model->dsList = [];
                $n = 0;
                foreach ($map['dsList'] as $item) {
                    $model->dsList[$n++] = null !== $item ? dsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
