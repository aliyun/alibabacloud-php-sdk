<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes;

class supportedEngineVersion extends Model
{
    /**
     * @var supportedArchitectureTypes
     */
    public $supportedArchitectureTypes;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'supportedArchitectureTypes' => 'SupportedArchitectureTypes',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->supportedArchitectureTypes) {
            $this->supportedArchitectureTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedArchitectureTypes) {
            $res['SupportedArchitectureTypes'] = null !== $this->supportedArchitectureTypes ? $this->supportedArchitectureTypes->toArray($noStream) : $this->supportedArchitectureTypes;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['SupportedArchitectureTypes'])) {
            $model->supportedArchitectureTypes = supportedArchitectureTypes::fromMap($map['SupportedArchitectureTypes']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
