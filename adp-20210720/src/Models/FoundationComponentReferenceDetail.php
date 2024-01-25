<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class FoundationComponentReferenceDetail extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $class;

    /**
     * @var string
     */
    public $componentDescription;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $componentReferenceUID;

    /**
     * @var string
     */
    public $componentUID;

    /**
     * @var string
     */
    public $componentVersionDescription;

    /**
     * @var string
     */
    public $componentVersionUID;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $documents;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $imagesMapping;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $orchestrationType;

    /**
     * @var string
     */
    public $orchestrationValues;

    /**
     * @var bool
     */
    public $parentComponent;

    /**
     * @var string
     */
    public $parentComponentVersionUID;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var string
     */
    public $readme;

    /**
     * @var string
     */
    public $relationUID;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var bool
     */
    public $singleton;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $values;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appVersion'                  => 'appVersion',
        'category'                    => 'category',
        'class'                       => 'class',
        'componentDescription'        => 'componentDescription',
        'componentName'               => 'componentName',
        'componentReferenceUID'       => 'componentReferenceUID',
        'componentUID'                => 'componentUID',
        'componentVersionDescription' => 'componentVersionDescription',
        'componentVersionUID'         => 'componentVersionUID',
        'createdAt'                   => 'createdAt',
        'documents'                   => 'documents',
        'enable'                      => 'enable',
        'imagesMapping'               => 'imagesMapping',
        'namespace'                   => 'namespace',
        'orchestrationType'           => 'orchestrationType',
        'orchestrationValues'         => 'orchestrationValues',
        'parentComponent'             => 'parentComponent',
        'parentComponentVersionUID'   => 'parentComponentVersionUID',
        'priority'                    => 'priority',
        'provider'                    => 'provider',
        'public'                      => 'public',
        'readme'                      => 'readme',
        'relationUID'                 => 'relationUID',
        'releaseName'                 => 'releaseName',
        'resources'                   => 'resources',
        'sequence'                    => 'sequence',
        'singleton'                   => 'singleton',
        'source'                      => 'source',
        'values'                      => 'values',
        'version'                     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['appVersion'] = $this->appVersion;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->class) {
            $res['class'] = $this->class;
        }
        if (null !== $this->componentDescription) {
            $res['componentDescription'] = $this->componentDescription;
        }
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
        if (null !== $this->componentReferenceUID) {
            $res['componentReferenceUID'] = $this->componentReferenceUID;
        }
        if (null !== $this->componentUID) {
            $res['componentUID'] = $this->componentUID;
        }
        if (null !== $this->componentVersionDescription) {
            $res['componentVersionDescription'] = $this->componentVersionDescription;
        }
        if (null !== $this->componentVersionUID) {
            $res['componentVersionUID'] = $this->componentVersionUID;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->documents) {
            $res['documents'] = $this->documents;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->imagesMapping) {
            $res['imagesMapping'] = $this->imagesMapping;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->orchestrationType) {
            $res['orchestrationType'] = $this->orchestrationType;
        }
        if (null !== $this->orchestrationValues) {
            $res['orchestrationValues'] = $this->orchestrationValues;
        }
        if (null !== $this->parentComponent) {
            $res['parentComponent'] = $this->parentComponent;
        }
        if (null !== $this->parentComponentVersionUID) {
            $res['parentComponentVersionUID'] = $this->parentComponentVersionUID;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }
        if (null !== $this->readme) {
            $res['readme'] = $this->readme;
        }
        if (null !== $this->relationUID) {
            $res['relationUID'] = $this->relationUID;
        }
        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }
        if (null !== $this->sequence) {
            $res['sequence'] = $this->sequence;
        }
        if (null !== $this->singleton) {
            $res['singleton'] = $this->singleton;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->values) {
            $res['values'] = $this->values;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FoundationComponentReferenceDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appVersion'])) {
            $model->appVersion = $map['appVersion'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['class'])) {
            $model->class = $map['class'];
        }
        if (isset($map['componentDescription'])) {
            $model->componentDescription = $map['componentDescription'];
        }
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
        if (isset($map['componentReferenceUID'])) {
            $model->componentReferenceUID = $map['componentReferenceUID'];
        }
        if (isset($map['componentUID'])) {
            $model->componentUID = $map['componentUID'];
        }
        if (isset($map['componentVersionDescription'])) {
            $model->componentVersionDescription = $map['componentVersionDescription'];
        }
        if (isset($map['componentVersionUID'])) {
            $model->componentVersionUID = $map['componentVersionUID'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['documents'])) {
            $model->documents = $map['documents'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['imagesMapping'])) {
            $model->imagesMapping = $map['imagesMapping'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['orchestrationType'])) {
            $model->orchestrationType = $map['orchestrationType'];
        }
        if (isset($map['orchestrationValues'])) {
            $model->orchestrationValues = $map['orchestrationValues'];
        }
        if (isset($map['parentComponent'])) {
            $model->parentComponent = $map['parentComponent'];
        }
        if (isset($map['parentComponentVersionUID'])) {
            $model->parentComponentVersionUID = $map['parentComponentVersionUID'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['public'])) {
            $model->public = $map['public'];
        }
        if (isset($map['readme'])) {
            $model->readme = $map['readme'];
        }
        if (isset($map['relationUID'])) {
            $model->relationUID = $map['relationUID'];
        }
        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }
        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
        }
        if (isset($map['sequence'])) {
            $model->sequence = $map['sequence'];
        }
        if (isset($map['singleton'])) {
            $model->singleton = $map['singleton'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['values'])) {
            $model->values = $map['values'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
