<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes;
use AlibabaCloud\Tea\Model;

class supportedEngineVersion extends Model
{
    /**
     * @description The available instance architectures.
     *
     * @var supportedArchitectureTypes
     */
    public $supportedArchitectureTypes;

    /**
     * @description The engine version of the instance.
     *
     * @example 5.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'supportedArchitectureTypes' => 'SupportedArchitectureTypes',
        'version'                    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedArchitectureTypes) {
            $res['SupportedArchitectureTypes'] = null !== $this->supportedArchitectureTypes ? $this->supportedArchitectureTypes->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngineVersion
     */
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
