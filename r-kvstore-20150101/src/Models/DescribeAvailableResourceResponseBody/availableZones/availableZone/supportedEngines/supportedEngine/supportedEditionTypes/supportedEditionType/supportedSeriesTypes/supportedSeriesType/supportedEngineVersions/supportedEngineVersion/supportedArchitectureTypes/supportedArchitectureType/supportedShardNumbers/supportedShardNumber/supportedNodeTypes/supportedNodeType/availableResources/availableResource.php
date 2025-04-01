<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType\availableResources;

use AlibabaCloud\Dara\Model;

class availableResource extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceClassRemark;
    protected $_name = [
        'capacity' => 'Capacity',
        'instanceClass' => 'InstanceClass',
        'instanceClassRemark' => 'InstanceClassRemark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceClassRemark) {
            $res['InstanceClassRemark'] = $this->instanceClassRemark;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceClassRemark'])) {
            $model->instanceClassRemark = $map['InstanceClassRemark'];
        }

        return $model;
    }
}
