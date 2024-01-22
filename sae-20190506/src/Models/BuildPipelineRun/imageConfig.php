<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun;

use AlibabaCloud\Tea\Model;

class imageConfig extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $repository;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'namespace'    => 'Namespace',
        'repository'   => 'Repository',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }

        return $model;
    }
}
