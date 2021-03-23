<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType\availableResources;

use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceClassRemark;
    protected $_name = [
        'instanceClass'       => 'InstanceClass',
        'instanceClassRemark' => 'InstanceClassRemark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceClassRemark) {
            $res['InstanceClassRemark'] = $this->instanceClassRemark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceClassRemark'])) {
            $model->instanceClassRemark = $map['InstanceClassRemark'];
        }

        return $model;
    }
}
