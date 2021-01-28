<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes;
use AlibabaCloud\Tea\Model;

class supportedShardNumber extends Model
{
    /**
     * @var supportedNodeTypes
     */
    public $supportedNodeTypes;

    /**
     * @var string
     */
    public $shardNumber;
    protected $_name = [
        'supportedNodeTypes' => 'SupportedNodeTypes',
        'shardNumber'        => 'ShardNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedNodeTypes) {
            $res['SupportedNodeTypes'] = null !== $this->supportedNodeTypes ? $this->supportedNodeTypes->toMap() : null;
        }
        if (null !== $this->shardNumber) {
            $res['ShardNumber'] = $this->shardNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedShardNumber
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedNodeTypes'])) {
            $model->supportedNodeTypes = supportedNodeTypes::fromMap($map['SupportedNodeTypes']);
        }
        if (isset($map['ShardNumber'])) {
            $model->shardNumber = $map['ShardNumber'];
        }

        return $model;
    }
}
