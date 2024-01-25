<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentVersionResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentVersionResponseBody\data\resources;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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
     * @var string
     */
    public $productComponentVersionUID;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $readme;

    /**
     * @var resources
     */
    public $resources;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName'              => 'componentName',
        'componentUID'               => 'componentUID',
        'description'                => 'description',
        'documents'                  => 'documents',
        'orchestrationValues'        => 'orchestrationValues',
        'packageURL'                 => 'packageURL',
        'parentComponent'            => 'parentComponent',
        'productComponentVersionUID' => 'productComponentVersionUID',
        'provider'                   => 'provider',
        'readme'                     => 'readme',
        'resources'                  => 'resources',
        'uid'                        => 'uid',
        'version'                    => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->orchestrationValues) {
            $res['orchestrationValues'] = $this->orchestrationValues;
        }
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
        }
        if (null !== $this->parentComponent) {
            $res['parentComponent'] = $this->parentComponent;
        }
        if (null !== $this->productComponentVersionUID) {
            $res['productComponentVersionUID'] = $this->productComponentVersionUID;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->readme) {
            $res['readme'] = $this->readme;
        }
        if (null !== $this->resources) {
            $res['resources'] = null !== $this->resources ? $this->resources->toMap() : null;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['orchestrationValues'])) {
            $model->orchestrationValues = $map['orchestrationValues'];
        }
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
        }
        if (isset($map['parentComponent'])) {
            $model->parentComponent = $map['parentComponent'];
        }
        if (isset($map['productComponentVersionUID'])) {
            $model->productComponentVersionUID = $map['productComponentVersionUID'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['readme'])) {
            $model->readme = $map['readme'];
        }
        if (isset($map['resources'])) {
            $model->resources = resources::fromMap($map['resources']);
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
