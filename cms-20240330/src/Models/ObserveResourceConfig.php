<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveResourceConfig extends Model
{
    /**
     * @var string
     */
    public $entityDomain;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $productCategory;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'entityDomain' => 'entityDomain',
        'entityType' => 'entityType',
        'namespace' => 'namespace',
        'productCategory' => 'productCategory',
        'relationType' => 'relationType',
        'resources' => 'resources',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityDomain) {
            $res['entityDomain'] = $this->entityDomain;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->productCategory) {
            $res['productCategory'] = $this->productCategory;
        }

        if (null !== $this->relationType) {
            $res['relationType'] = $this->relationType;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1] = $item1;
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
        if (isset($map['entityDomain'])) {
            $model->entityDomain = $map['entityDomain'];
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['productCategory'])) {
            $model->productCategory = $map['productCategory'];
        }

        if (isset($map['relationType'])) {
            $model->relationType = $map['relationType'];
        }

        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
