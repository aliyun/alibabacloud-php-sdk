<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers;
use AlibabaCloud\Tea\Model;

class supportedArchitectureType extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var supportedShardNumbers
     */
    public $supportedShardNumbers;
    protected $_name = [
        'architecture'          => 'Architecture',
        'supportedShardNumbers' => 'SupportedShardNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->supportedShardNumbers) {
            $res['SupportedShardNumbers'] = null !== $this->supportedShardNumbers ? $this->supportedShardNumbers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedArchitectureType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['SupportedShardNumbers'])) {
            $model->supportedShardNumbers = supportedShardNumbers::fromMap($map['SupportedShardNumbers']);
        }

        return $model;
    }
}
