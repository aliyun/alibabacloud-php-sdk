<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentVersionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example component
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
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documents;

    /**
     * @example [{"Registry":"harbor.middleware.com","Repository":"middleware/rocketmq-namesrv","Tag":"4.8.0","ImageID":"sha256:d4a8260cffbd40cc4bd586cbf7cc29d22fb0807e318ec1aca66fb3e82fa7xxxx","ManagedImage":"xxx-registry.cn-shanghai.cr.aliyuncs.com/cloud-middleware/harmonycloud-cn-rocketmq:middleware_rocketmq-namesrv-4.8.0-d4a8260cxxxx"}]
     *
     * @var string
     */
    public $imagesMapping;

    /**
     * @example replicaCount: 2\n\nresources:\n  limits:\n    cpu: 200m\n    memory: 512Mi\n  requests:\n    cpu: 100m\n    memory: 256Mi
     *
     * @var string
     */
    public $orchestrationValues;

    /**
     * @var string
     */
    public $packageURL;

    /**
     * @example false
     *
     * @var bool
     */
    public $parentComponent;

    /**
     * @example readme
     *
     * @var string
     */
    public $readme;

    /**
     * @var string
     */
    public $resources;

    /**
     * @example 8020f041-4a8f-4222-a9d7-aa6b8effb701
     *
     * @var string
     */
    public $uid;

    /**
     * @example 1.0.0
     *
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
        'orchestrationValues' => 'orchestrationValues',
        'packageURL'          => 'packageURL',
        'parentComponent'     => 'parentComponent',
        'readme'              => 'readme',
        'resources'           => 'resources',
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
        if (null !== $this->orchestrationValues) {
            $res['orchestrationValues'] = $this->orchestrationValues;
        }
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
        }
        if (null !== $this->parentComponent) {
            $res['parentComponent'] = $this->parentComponent;
        }
        if (null !== $this->readme) {
            $res['readme'] = $this->readme;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
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
     * @return list_
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
        if (isset($map['orchestrationValues'])) {
            $model->orchestrationValues = $map['orchestrationValues'];
        }
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
        }
        if (isset($map['parentComponent'])) {
            $model->parentComponent = $map['parentComponent'];
        }
        if (isset($map['readme'])) {
            $model->readme = $map['readme'];
        }
        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
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
