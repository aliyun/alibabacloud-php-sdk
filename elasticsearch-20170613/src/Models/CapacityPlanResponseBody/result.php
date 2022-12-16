<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result\extendConfigs;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result\nodeConfigurations;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var extendConfigs[]
     */
    public $extendConfigs;

    /**
     * @example advanced
     *
     * @var string
     */
    public $instanceCategory;

    /**
     * @var nodeConfigurations[]
     */
    public $nodeConfigurations;

    /**
     * @example true
     *
     * @var bool
     */
    public $oversizedCluster;
    protected $_name = [
        'extendConfigs'      => 'ExtendConfigs',
        'instanceCategory'   => 'InstanceCategory',
        'nodeConfigurations' => 'NodeConfigurations',
        'oversizedCluster'   => 'OversizedCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendConfigs) {
            $res['ExtendConfigs'] = [];
            if (null !== $this->extendConfigs && \is_array($this->extendConfigs)) {
                $n = 0;
                foreach ($this->extendConfigs as $item) {
                    $res['ExtendConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = $this->instanceCategory;
        }
        if (null !== $this->nodeConfigurations) {
            $res['NodeConfigurations'] = [];
            if (null !== $this->nodeConfigurations && \is_array($this->nodeConfigurations)) {
                $n = 0;
                foreach ($this->nodeConfigurations as $item) {
                    $res['NodeConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->oversizedCluster) {
            $res['OversizedCluster'] = $this->oversizedCluster;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendConfigs'])) {
            if (!empty($map['ExtendConfigs'])) {
                $model->extendConfigs = [];
                $n                    = 0;
                foreach ($map['ExtendConfigs'] as $item) {
                    $model->extendConfigs[$n++] = null !== $item ? extendConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceCategory'])) {
            $model->instanceCategory = $map['InstanceCategory'];
        }
        if (isset($map['NodeConfigurations'])) {
            if (!empty($map['NodeConfigurations'])) {
                $model->nodeConfigurations = [];
                $n                         = 0;
                foreach ($map['NodeConfigurations'] as $item) {
                    $model->nodeConfigurations[$n++] = null !== $item ? nodeConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OversizedCluster'])) {
            $model->oversizedCluster = $map['OversizedCluster'];
        }

        return $model;
    }
}
