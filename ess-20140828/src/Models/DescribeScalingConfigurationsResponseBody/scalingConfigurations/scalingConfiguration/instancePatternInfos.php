<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\instancePatternInfos\instancePatternInfo;
use AlibabaCloud\Tea\Model;

class instancePatternInfos extends Model
{
    /**
     * @var instancePatternInfo[]
     */
    public $instancePatternInfo;
    protected $_name = [
        'instancePatternInfo' => 'InstancePatternInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePatternInfo) {
            $res['InstancePatternInfo'] = [];
            if (null !== $this->instancePatternInfo && \is_array($this->instancePatternInfo)) {
                $n = 0;
                foreach ($this->instancePatternInfo as $item) {
                    $res['InstancePatternInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancePatternInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePatternInfo'])) {
            if (!empty($map['InstancePatternInfo'])) {
                $model->instancePatternInfo = [];
                $n                          = 0;
                foreach ($map['InstancePatternInfo'] as $item) {
                    $model->instancePatternInfo[$n++] = null !== $item ? instancePatternInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
