<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes;
use AlibabaCloud\Tea\Model;

class supportedEngineVersion extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var supportedArchitectureTypes
     */
    public $supportedArchitectureTypes;
    protected $_name = [
        'version'                    => 'Version',
        'supportedArchitectureTypes' => 'SupportedArchitectureTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->supportedArchitectureTypes) {
            $res['SupportedArchitectureTypes'] = null !== $this->supportedArchitectureTypes ? $this->supportedArchitectureTypes->toMap() : null;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['SupportedArchitectureTypes'])) {
            $model->supportedArchitectureTypes = supportedArchitectureTypes::fromMap($map['SupportedArchitectureTypes']);
        }

        return $model;
    }
}
