<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result\extendConfigs;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result\nodeConfigurations;

class result extends Model
{
    /**
     * @var extendConfigs[]
     */
    public $extendConfigs;

    /**
     * @var string
     */
    public $instanceCategory;

    /**
     * @var nodeConfigurations[]
     */
    public $nodeConfigurations;

    /**
     * @var bool
     */
    public $oversizedCluster;
    protected $_name = [
        'extendConfigs' => 'ExtendConfigs',
        'instanceCategory' => 'InstanceCategory',
        'nodeConfigurations' => 'NodeConfigurations',
        'oversizedCluster' => 'OversizedCluster',
    ];

    public function validate()
    {
        if (\is_array($this->extendConfigs)) {
            Model::validateArray($this->extendConfigs);
        }
        if (\is_array($this->nodeConfigurations)) {
            Model::validateArray($this->nodeConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendConfigs) {
            if (\is_array($this->extendConfigs)) {
                $res['ExtendConfigs'] = [];
                $n1 = 0;
                foreach ($this->extendConfigs as $item1) {
                    $res['ExtendConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = $this->instanceCategory;
        }

        if (null !== $this->nodeConfigurations) {
            if (\is_array($this->nodeConfigurations)) {
                $res['NodeConfigurations'] = [];
                $n1 = 0;
                foreach ($this->nodeConfigurations as $item1) {
                    $res['NodeConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->oversizedCluster) {
            $res['OversizedCluster'] = $this->oversizedCluster;
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
        if (isset($map['ExtendConfigs'])) {
            if (!empty($map['ExtendConfigs'])) {
                $model->extendConfigs = [];
                $n1 = 0;
                foreach ($map['ExtendConfigs'] as $item1) {
                    $model->extendConfigs[$n1] = extendConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceCategory'])) {
            $model->instanceCategory = $map['InstanceCategory'];
        }

        if (isset($map['NodeConfigurations'])) {
            if (!empty($map['NodeConfigurations'])) {
                $model->nodeConfigurations = [];
                $n1 = 0;
                foreach ($map['NodeConfigurations'] as $item1) {
                    $model->nodeConfigurations[$n1] = nodeConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OversizedCluster'])) {
            $model->oversizedCluster = $map['OversizedCluster'];
        }

        return $model;
    }
}
