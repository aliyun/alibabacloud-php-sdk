<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleDataSource\dsList;

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

    public function validate()
    {
        if (\is_array($this->dsList)) {
            Model::validateArray($this->dsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
        }

        if (null !== $this->dsList) {
            if (\is_array($this->dsList)) {
                $res['dsList'] = [];
                $n1 = 0;
                foreach ($this->dsList as $item1) {
                    $res['dsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
        }

        if (isset($map['dsList'])) {
            if (!empty($map['dsList'])) {
                $model->dsList = [];
                $n1 = 0;
                foreach ($map['dsList'] as $item1) {
                    $model->dsList[$n1++] = dsList::fromMap($item1);
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
