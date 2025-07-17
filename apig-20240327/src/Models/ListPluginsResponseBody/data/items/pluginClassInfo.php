<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class pluginClassInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @example 999
     *
     * @var string
     */
    public $executePriority;

    /**
     * @example AUTHZ
     *
     * @var string
     */
    public $executeStage;

    /**
     * @example key-rate-limit
     *
     * @var string
     */
    public $name;

    /**
     * @example pls-cqebrgh46ppatmpri
     *
     * @var string
     */
    public $pluginClassId;

    /**
     * @example HigressOfficial
     *
     * @var string
     */
    public $source;

    /**
     * @example 2.0.3
     *
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'alias' => 'alias',
        'executePriority' => 'executePriority',
        'executeStage' => 'executeStage',
        'name' => 'name',
        'pluginClassId' => 'pluginClassId',
        'source' => 'source',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->executePriority) {
            $res['executePriority'] = $this->executePriority;
        }
        if (null !== $this->executeStage) {
            $res['executeStage'] = $this->executeStage;
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
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginClassInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['executePriority'])) {
            $model->executePriority = $map['executePriority'];
        }
        if (isset($map['executeStage'])) {
            $model->executeStage = $map['executeStage'];
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
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        return $model;
    }
}
