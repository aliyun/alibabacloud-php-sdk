<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class UdfArtifact extends Model
{
    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string[]
     */
    public $dependencyJarUris;

    /**
     * @var string
     */
    public $jarUrl;

    /**
     * @var int
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var UdfClass[]
     */
    public $udfClasses;
    protected $_name = [
        'artifactType'      => 'artifactType',
        'createdAt'         => 'createdAt',
        'creator'           => 'creator',
        'dependencyJarUris' => 'dependencyJarUris',
        'jarUrl'            => 'jarUrl',
        'modifiedAt'        => 'modifiedAt',
        'name'              => 'name',
        'namespace'         => 'namespace',
        'udfClasses'        => 'udfClasses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['artifactType'] = $this->artifactType;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->dependencyJarUris) {
            $res['dependencyJarUris'] = $this->dependencyJarUris;
        }
        if (null !== $this->jarUrl) {
            $res['jarUrl'] = $this->jarUrl;
        }
        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->udfClasses) {
            $res['udfClasses'] = [];
            if (null !== $this->udfClasses && \is_array($this->udfClasses)) {
                $n = 0;
                foreach ($this->udfClasses as $item) {
                    $res['udfClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UdfArtifact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['artifactType'])) {
            $model->artifactType = $map['artifactType'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['dependencyJarUris'])) {
            if (!empty($map['dependencyJarUris'])) {
                $model->dependencyJarUris = $map['dependencyJarUris'];
            }
        }
        if (isset($map['jarUrl'])) {
            $model->jarUrl = $map['jarUrl'];
        }
        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['udfClasses'])) {
            if (!empty($map['udfClasses'])) {
                $model->udfClasses = [];
                $n                 = 0;
                foreach ($map['udfClasses'] as $item) {
                    $model->udfClasses[$n++] = null !== $item ? UdfClass::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
