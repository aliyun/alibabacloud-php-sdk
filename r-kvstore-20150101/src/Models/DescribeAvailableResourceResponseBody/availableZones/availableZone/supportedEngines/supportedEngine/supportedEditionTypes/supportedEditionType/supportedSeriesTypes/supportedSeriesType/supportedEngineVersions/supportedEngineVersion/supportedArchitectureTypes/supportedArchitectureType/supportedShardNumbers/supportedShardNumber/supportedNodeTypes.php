<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType;
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
