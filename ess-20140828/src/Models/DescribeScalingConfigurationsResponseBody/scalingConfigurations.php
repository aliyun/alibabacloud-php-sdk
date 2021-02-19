<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration;
use AlibabaCloud\Tea\Model;

class scalingConfigurations extends Model
{
    /**
     * @var scalingConfiguration[]
     */
    public $scalingConfiguration;
    protected $_name = [
        'scalingConfiguration' => 'ScalingConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingConfiguration) {
            $res['ScalingConfiguration'] = [];
            if (null !== $this->scalingConfiguration && \is_array($this->scalingConfiguration)) {
                $n = 0;
                foreach ($this->scalingConfiguration as $item) {
                    $res['ScalingConfiguration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingConfiguration'])) {
            if (!empty($map['ScalingConfiguration'])) {
                $model->scalingConfiguration = [];
                $n                           = 0;
                foreach ($map['ScalingConfiguration'] as $item) {
                    $model->scalingConfiguration[$n++] = null !== $item ? scalingConfiguration::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
