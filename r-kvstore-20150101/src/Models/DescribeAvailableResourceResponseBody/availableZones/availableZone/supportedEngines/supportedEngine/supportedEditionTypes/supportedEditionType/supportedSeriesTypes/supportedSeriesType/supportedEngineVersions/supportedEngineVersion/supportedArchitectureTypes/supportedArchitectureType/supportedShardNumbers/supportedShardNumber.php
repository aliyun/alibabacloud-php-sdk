<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes;

class supportedShardNumber extends Model
{
    /**
     * @var string
     */
    public $shardNumber;

    /**
     * @var supportedNodeTypes
     */
    public $supportedNodeTypes;
    protected $_name = [
        'shardNumber' => 'ShardNumber',
        'supportedNodeTypes' => 'SupportedNodeTypes',
    ];

    public function validate()
    {
        if (null !== $this->supportedNodeTypes) {
            $this->supportedNodeTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shardNumber) {
            $res['ShardNumber'] = $this->shardNumber;
        }

        if (null !== $this->supportedNodeTypes) {
            $res['SupportedNodeTypes'] = null !== $this->supportedNodeTypes ? $this->supportedNodeTypes->toArray($noStream) : $this->supportedNodeTypes;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShardNumber'])) {
            $model->shardNumber = $map['ShardNumber'];
        }

        if (isset($map['SupportedNodeTypes'])) {
            $model->supportedNodeTypes = supportedNodeTypes::fromMap($map['SupportedNodeTypes']);
        }

        return $model;
    }
}
