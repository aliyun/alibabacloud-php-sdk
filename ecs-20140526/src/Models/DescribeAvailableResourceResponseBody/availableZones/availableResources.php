<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableResources\supportedResources;
use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var supportedResources[]
     */
    public $supportedResources;
    protected $_name = [
        'type'               => 'Type',
        'supportedResources' => 'SupportedResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->supportedResources) {
            $res['SupportedResources'] = [];
            if (null !== $this->supportedResources && \is_array($this->supportedResources)) {
                $n = 0;
                foreach ($this->supportedResources as $item) {
                    $res['SupportedResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SupportedResources'])) {
            if (!empty($map['SupportedResources'])) {
                $model->supportedResources = [];
                $n                         = 0;
                foreach ($map['SupportedResources'] as $item) {
                    $model->supportedResources[$n++] = null !== $item ? supportedResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
