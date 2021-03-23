<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType;
use AlibabaCloud\Tea\Model;

class supportedArchitectureTypes extends Model
{
    /**
     * @var supportedArchitectureType[]
     */
    public $supportedArchitectureType;
    protected $_name = [
        'supportedArchitectureType' => 'SupportedArchitectureType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedArchitectureType) {
            $res['SupportedArchitectureType'] = [];
            if (null !== $this->supportedArchitectureType && \is_array($this->supportedArchitectureType)) {
                $n = 0;
                foreach ($this->supportedArchitectureType as $item) {
                    $res['SupportedArchitectureType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedArchitectureTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedArchitectureType'])) {
            if (!empty($map['SupportedArchitectureType'])) {
                $model->supportedArchitectureType = [];
                $n                                = 0;
                foreach ($map['SupportedArchitectureType'] as $item) {
                    $model->supportedArchitectureType[$n++] = null !== $item ? supportedArchitectureType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
