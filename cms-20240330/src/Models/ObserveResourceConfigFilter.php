<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveResourceConfigFilter extends Model
{
    /**
     * @var QueryAlertRulesEntityDomainFilter
     */
    public $entityDomain;

    /**
     * @var QueryAlertRulesEntityTypeFilter
     */
    public $entityType;

    /**
     * @var QueryAlertRulesNamespaceFilter
     */
    public $namespace;

    /**
     * @var QueryAlertRulesProductCategoryFilter
     */
    public $productCategory;

    /**
     * @var QueryAlertRulesRelationTypeFilter
     */
    public $relationType;

    /**
     * @var QueryAlertRulesResourcesFilter
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
        if (null !== $this->entityDomain) {
            $this->entityDomain->validate();
        }
        if (null !== $this->entityType) {
            $this->entityType->validate();
        }
        if (null !== $this->namespace) {
            $this->namespace->validate();
        }
        if (null !== $this->productCategory) {
            $this->productCategory->validate();
        }
        if (null !== $this->relationType) {
            $this->relationType->validate();
        }
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityDomain) {
            $res['entityDomain'] = null !== $this->entityDomain ? $this->entityDomain->toArray($noStream) : $this->entityDomain;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = null !== $this->entityType ? $this->entityType->toArray($noStream) : $this->entityType;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toArray($noStream) : $this->namespace;
        }

        if (null !== $this->productCategory) {
            $res['productCategory'] = null !== $this->productCategory ? $this->productCategory->toArray($noStream) : $this->productCategory;
        }

        if (null !== $this->relationType) {
            $res['relationType'] = null !== $this->relationType ? $this->relationType->toArray($noStream) : $this->relationType;
        }

        if (null !== $this->resources) {
            $res['resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
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
            $model->entityDomain = QueryAlertRulesEntityDomainFilter::fromMap($map['entityDomain']);
        }

        if (isset($map['entityType'])) {
            $model->entityType = QueryAlertRulesEntityTypeFilter::fromMap($map['entityType']);
        }

        if (isset($map['namespace'])) {
            $model->namespace = QueryAlertRulesNamespaceFilter::fromMap($map['namespace']);
        }

        if (isset($map['productCategory'])) {
            $model->productCategory = QueryAlertRulesProductCategoryFilter::fromMap($map['productCategory']);
        }

        if (isset($map['relationType'])) {
            $model->relationType = QueryAlertRulesRelationTypeFilter::fromMap($map['relationType']);
        }

        if (isset($map['resources'])) {
            $model->resources = QueryAlertRulesResourcesFilter::fromMap($map['resources']);
        }

        return $model;
    }
}
