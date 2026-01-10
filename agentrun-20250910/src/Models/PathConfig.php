<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class PathConfig extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeEndpointName;

    /**
     * @var string[]
     */
    public $methods;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'agentRuntimeEndpointName' => 'agentRuntimeEndpointName',
        'methods' => 'methods',
        'path' => 'path',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeEndpointName) {
            $res['agentRuntimeEndpointName'] = $this->agentRuntimeEndpointName;
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['agentRuntimeEndpointName'])) {
            $model->agentRuntimeEndpointName = $map['agentRuntimeEndpointName'];
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
