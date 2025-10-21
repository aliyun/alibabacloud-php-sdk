<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        'artifactType' => 'artifactType',
        'createdAt' => 'createdAt',
        'creator' => 'creator',
        'dependencyJarUris' => 'dependencyJarUris',
        'jarUrl' => 'jarUrl',
        'modifiedAt' => 'modifiedAt',
        'name' => 'name',
        'namespace' => 'namespace',
        'udfClasses' => 'udfClasses',
    ];

    public function validate()
    {
        if (\is_array($this->dependencyJarUris)) {
            Model::validateArray($this->dependencyJarUris);
        }
        if (\is_array($this->udfClasses)) {
            Model::validateArray($this->udfClasses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dependencyJarUris)) {
                $res['dependencyJarUris'] = [];
                $n1 = 0;
                foreach ($this->dependencyJarUris as $item1) {
                    $res['dependencyJarUris'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->udfClasses)) {
                $res['udfClasses'] = [];
                $n1 = 0;
                foreach ($this->udfClasses as $item1) {
                    $res['udfClasses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $model->dependencyJarUris = [];
                $n1 = 0;
                foreach ($map['dependencyJarUris'] as $item1) {
                    $model->dependencyJarUris[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['udfClasses'] as $item1) {
                    $model->udfClasses[$n1] = UdfClass::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
