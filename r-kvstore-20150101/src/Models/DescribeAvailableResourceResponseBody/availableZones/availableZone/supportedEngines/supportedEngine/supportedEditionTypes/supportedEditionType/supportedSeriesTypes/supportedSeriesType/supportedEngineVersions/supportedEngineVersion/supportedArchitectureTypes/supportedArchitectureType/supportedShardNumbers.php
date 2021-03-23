<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber;
use AlibabaCloud\Tea\Model;

class supportedShardNumbers extends Model
{
    /**
     * @var supportedShardNumber[]
     */
    public $supportedShardNumber;
    protected $_name = [
        'supportedShardNumber' => 'SupportedShardNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedShardNumber) {
            $res['SupportedShardNumber'] = [];
            if (null !== $this->supportedShardNumber && \is_array($this->supportedShardNumber)) {
                $n = 0;
                foreach ($this->supportedShardNumber as $item) {
                    $res['SupportedShardNumber'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedShardNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedShardNumber'])) {
            if (!empty($map['SupportedShardNumber'])) {
                $model->supportedShardNumber = [];
                $n                           = 0;
                foreach ($map['SupportedShardNumber'] as $item) {
                    $model->supportedShardNumber[$n++] = null !== $item ? supportedShardNumber::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
