<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType;

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
        if (\is_array($this->supportedArchitectureType)) {
            Model::validateArray($this->supportedArchitectureType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedArchitectureType) {
            if (\is_array($this->supportedArchitectureType)) {
                $res['SupportedArchitectureType'] = [];
                $n1 = 0;
                foreach ($this->supportedArchitectureType as $item1) {
                    $res['SupportedArchitectureType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedArchitectureType'])) {
            if (!empty($map['SupportedArchitectureType'])) {
                $model->supportedArchitectureType = [];
                $n1 = 0;
                foreach ($map['SupportedArchitectureType'] as $item1) {
                    $model->supportedArchitectureType[$n1] = supportedArchitectureType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
