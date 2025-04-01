<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber;

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
        if (\is_array($this->supportedShardNumber)) {
            Model::validateArray($this->supportedShardNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedShardNumber) {
            if (\is_array($this->supportedShardNumber)) {
                $res['SupportedShardNumber'] = [];
                $n1 = 0;
                foreach ($this->supportedShardNumber as $item1) {
                    $res['SupportedShardNumber'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedShardNumber'])) {
            if (!empty($map['SupportedShardNumber'])) {
                $model->supportedShardNumber = [];
                $n1 = 0;
                foreach ($map['SupportedShardNumber'] as $item1) {
                    $model->supportedShardNumber[$n1++] = supportedShardNumber::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
