<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ComponentVersion extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $componentUID;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documents;

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
     * @var string
     */
    public $packageURL;

    /**
     * @var bool
     */
    public $parentComponent;

    /**
     * @var Platform[]
     */
    public $platforms;

    /**
     * @var string
     */
    public $readme;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appVersion'          => 'appVersion',
        'componentName'       => 'componentName',
        'componentUID'        => 'componentUID',
        'description'         => 'description',
        'documents'           => 'documents',
        'imagesMapping'       => 'imagesMapping',
        'namespace'           => 'namespace',
        'orchestrationType'   => 'orchestrationType',
        'orchestrationValues' => 'orchestrationValues',
        'packageURL'          => 'packageURL',
        'parentComponent'     => 'parentComponent',
        'platforms'           => 'platforms',
        'readme'              => 'readme',
        'resources'           => 'resources',
        'source'              => 'source',
        'uid'                 => 'uid',
        'version'             => 'version',
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
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
        if (null !== $this->componentUID) {
            $res['componentUID'] = $this->componentUID;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->documents) {
            $res['documents'] = $this->documents;
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
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
        }
        if (null !== $this->parentComponent) {
            $res['parentComponent'] = $this->parentComponent;
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->readme) {
            $res['readme'] = $this->readme;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComponentVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appVersion'])) {
            $model->appVersion = $map['appVersion'];
        }
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
        if (isset($map['componentUID'])) {
            $model->componentUID = $map['componentUID'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['documents'])) {
            $model->documents = $map['documents'];
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
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
        }
        if (isset($map['parentComponent'])) {
            $model->parentComponent = $map['parentComponent'];
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['readme'])) {
            $model->readme = $map['readme'];
        }
        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
