<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class PluginClassInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $configExample;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $executePriority;

    /**
     * @var string
     */
    public $executeStage;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var bool
     */
    public $innerPlugin;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pluginClassId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $supportedMinGatewayVersion;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var string
     */
    public $wasmLanguage;

    /**
     * @var string
     */
    public $wasmUrl;
    protected $_name = [
        'alias' => 'alias',
        'configExample' => 'configExample',
        'description' => 'description',
        'executePriority' => 'executePriority',
        'executeStage' => 'executeStage',
        'imageName' => 'imageName',
        'innerPlugin' => 'innerPlugin',
        'mode' => 'mode',
        'name' => 'name',
        'pluginClassId' => 'pluginClassId',
        'source' => 'source',
        'supportedMinGatewayVersion' => 'supportedMinGatewayVersion',
        'type' => 'type',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
        'wasmLanguage' => 'wasmLanguage',
        'wasmUrl' => 'wasmUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->configExample) {
            $res['configExample'] = $this->configExample;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executePriority) {
            $res['executePriority'] = $this->executePriority;
        }

        if (null !== $this->executeStage) {
            $res['executeStage'] = $this->executeStage;
        }

        if (null !== $this->imageName) {
            $res['imageName'] = $this->imageName;
        }

        if (null !== $this->innerPlugin) {
            $res['innerPlugin'] = $this->innerPlugin;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pluginClassId) {
            $res['pluginClassId'] = $this->pluginClassId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->supportedMinGatewayVersion) {
            $res['supportedMinGatewayVersion'] = $this->supportedMinGatewayVersion;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
        }

        if (null !== $this->wasmLanguage) {
            $res['wasmLanguage'] = $this->wasmLanguage;
        }

        if (null !== $this->wasmUrl) {
            $res['wasmUrl'] = $this->wasmUrl;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['configExample'])) {
            $model->configExample = $map['configExample'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executePriority'])) {
            $model->executePriority = $map['executePriority'];
        }

        if (isset($map['executeStage'])) {
            $model->executeStage = $map['executeStage'];
        }

        if (isset($map['imageName'])) {
            $model->imageName = $map['imageName'];
        }

        if (isset($map['innerPlugin'])) {
            $model->innerPlugin = $map['innerPlugin'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pluginClassId'])) {
            $model->pluginClassId = $map['pluginClassId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['supportedMinGatewayVersion'])) {
            $model->supportedMinGatewayVersion = $map['supportedMinGatewayVersion'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        if (isset($map['wasmLanguage'])) {
            $model->wasmLanguage = $map['wasmLanguage'];
        }

        if (isset($map['wasmUrl'])) {
            $model->wasmUrl = $map['wasmUrl'];
        }

        return $model;
    }
}
