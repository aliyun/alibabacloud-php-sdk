<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType;

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
        if (\is_array($this->supportedNodeType)) {
            Model::validateArray($this->supportedNodeType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedNodeType) {
            if (\is_array($this->supportedNodeType)) {
                $res['SupportedNodeType'] = [];
                $n1 = 0;
                foreach ($this->supportedNodeType as $item1) {
                    $res['SupportedNodeType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SupportedNodeType'])) {
            if (!empty($map['SupportedNodeType'])) {
                $model->supportedNodeType = [];
                $n1 = 0;
                foreach ($map['SupportedNodeType'] as $item1) {
                    $model->supportedNodeType[$n1] = supportedNodeType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
