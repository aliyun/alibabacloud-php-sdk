<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetProductComponentVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1.0.0
     *
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
    public $componentDescription;

    /**
     * @example component-name
     *
     * @var string
     */
    public $componentName;

    /**
     * @example 62cd4869-71b4-4c9f-b6c4-xxxxxxxxxxxx
     *
     * @var string
     */
    public $componentUID;

    /**
     * @var string
     */
    public $componentVersionDescription;

    /**
     * @example 9963a9ec-95d0-4e82-88c8-xxxxxxxxxxxx
     *
     * @var string
     */
    public $componentVersionUID;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example replicaCount: 2\n\nresources:\n  limits:\n    cpu: 200m\n    memory: 512Mi\n  requests:\n    cpu: 100m\n    memory: 256Mi
     *
     * @var string
     */
    public $orchestrationValues;

    /**
     * @example false
     *
     * @var bool
     */
    public $parentComponent;

    /**
     * @example 7a5685f0-35f0--478c-8869-xxxxxxxxxxxx
     *
     * @var string
     */
    public $parentComponentVersionRelationUID;

    /**
     * @example 944ce61f-10c1-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $parentComponentVersionUID;

    /**
     * @example e61f944c-c021-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @example 85f035f0-7a56-478c-8869-xxxxxxxxxxxx
     *
     * @var string
     */
    public $relationUID;

    /**
     * @example component-release
     *
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
     * @var string
     */
    public $source;

    /**
     * @example replicaCount: 2\n\nresources:\n  limits:\n    cpu: 200m\n    memory: 512Mi\n  requests:\n    cpu: 100m\n    memory: 256Mi
     *
     * @var string
     */
    public $values;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appVersion'                        => 'appVersion',
        'category'                          => 'category',
        'componentDescription'              => 'componentDescription',
        'componentName'                     => 'componentName',
        'componentUID'                      => 'componentUID',
        'componentVersionDescription'       => 'componentVersionDescription',
        'componentVersionUID'               => 'componentVersionUID',
        'enable'                            => 'enable',
        'namespace'                         => 'namespace',
        'orchestrationValues'               => 'orchestrationValues',
        'parentComponent'                   => 'parentComponent',
        'parentComponentVersionRelationUID' => 'parentComponentVersionRelationUID',
        'parentComponentVersionUID'         => 'parentComponentVersionUID',
        'productVersionUID'                 => 'productVersionUID',
        'relationUID'                       => 'relationUID',
        'releaseName'                       => 'releaseName',
        'resources'                         => 'resources',
        'sequence'                          => 'sequence',
        'source'                            => 'source',
        'values'                            => 'values',
        'version'                           => 'version',
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
        if (null !== $this->componentDescription) {
            $res['componentDescription'] = $this->componentDescription;
        }
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
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
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->orchestrationValues) {
            $res['orchestrationValues'] = $this->orchestrationValues;
        }
        if (null !== $this->parentComponent) {
            $res['parentComponent'] = $this->parentComponent;
        }
        if (null !== $this->parentComponentVersionRelationUID) {
            $res['parentComponentVersionRelationUID'] = $this->parentComponentVersionRelationUID;
        }
        if (null !== $this->parentComponentVersionUID) {
            $res['parentComponentVersionUID'] = $this->parentComponentVersionUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
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
     * @return data
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
        if (isset($map['componentDescription'])) {
            $model->componentDescription = $map['componentDescription'];
        }
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['orchestrationValues'])) {
            $model->orchestrationValues = $map['orchestrationValues'];
        }
        if (isset($map['parentComponent'])) {
            $model->parentComponent = $map['parentComponent'];
        }
        if (isset($map['parentComponentVersionRelationUID'])) {
            $model->parentComponentVersionRelationUID = $map['parentComponentVersionRelationUID'];
        }
        if (isset($map['parentComponentVersionUID'])) {
            $model->parentComponentVersionUID = $map['parentComponentVersionUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
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
