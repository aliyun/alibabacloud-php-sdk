<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes\supportedNodeType;
use AlibabaCloud\Tea\Model;

class supportedNodeTypes extends Model
{
    /**
     * @var supportedNodeType[]
     */
    public $supportedNodeType;
    protected $_name = [
        'supportedNodeType' => 'SupportedNodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedNodeType) {
            $res['SupportedNodeType'] = [];
            if (null !== $this->supportedNodeType && \is_array($this->supportedNodeType)) {
                $n = 0;
                foreach ($this->supportedNodeType as $item) {
                    $res['SupportedNodeType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedNodeTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedNodeType'])) {
            if (!empty($map['SupportedNodeType'])) {
                $model->supportedNodeType = [];
                $n                        = 0;
                foreach ($map['SupportedNodeType'] as $item) {
                    $model->supportedNodeType[$n++] = null !== $item ? supportedNodeType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
