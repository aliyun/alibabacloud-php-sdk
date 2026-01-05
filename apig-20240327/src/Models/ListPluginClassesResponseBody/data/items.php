<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $installed;

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
    public $pluginId;

    /**
     * @var string
     */
    public $publishStatus;

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
    protected $_name = [
        'alias' => 'alias',
        'description' => 'description',
        'installed' => 'installed',
        'name' => 'name',
        'pluginClassId' => 'pluginClassId',
        'pluginId' => 'pluginId',
        'publishStatus' => 'publishStatus',
        'source' => 'source',
        'supportedMinGatewayVersion' => 'supportedMinGatewayVersion',
        'type' => 'type',
        'version' => 'version',
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->installed) {
            $res['installed'] = $this->installed;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pluginClassId) {
            $res['pluginClassId'] = $this->pluginClassId;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->publishStatus) {
            $res['publishStatus'] = $this->publishStatus;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['installed'])) {
            $model->installed = $map['installed'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pluginClassId'])) {
            $model->pluginClassId = $map['pluginClassId'];
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['publishStatus'])) {
            $model->publishStatus = $map['publishStatus'];
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

        return $model;
    }
}
