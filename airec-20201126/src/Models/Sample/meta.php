<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\Sample;

use AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config;
use AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\extendParams;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoUpdate;

    /**
     * @example 86400
     *
     * @var int
     */
    public $autoUpdateFrequency;

    /**
     * @example 1638877561147
     *
     * @var string
     */
    public $clonedId;

    /**
     * @var config
     */
    public $config;

    /**
     * @var extendParams
     */
    public $extendParams;

    /**
     * @example Sample
     *
     * @var string
     */
    public $metaType;

    /**
     * @example 12345
     *
     * @var string
     */
    public $name;

    /**
     * @example projectName.tableName
     *
     * @var string
     */
    public $storeConfig;

    /**
     * @example Cloned 复制的 System 系统的 Custom 自定义的
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoUpdate'          => 'AutoUpdate',
        'autoUpdateFrequency' => 'AutoUpdateFrequency',
        'clonedId'            => 'ClonedId',
        'config'              => 'Config',
        'extendParams'        => 'ExtendParams',
        'metaType'            => 'MetaType',
        'name'                => 'Name',
        'storeConfig'         => 'StoreConfig',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpdate) {
            $res['AutoUpdate'] = $this->autoUpdate;
        }
        if (null !== $this->autoUpdateFrequency) {
            $res['AutoUpdateFrequency'] = $this->autoUpdateFrequency;
        }
        if (null !== $this->clonedId) {
            $res['ClonedId'] = $this->clonedId;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->extendParams) {
            $res['ExtendParams'] = null !== $this->extendParams ? $this->extendParams->toMap() : null;
        }
        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->storeConfig) {
            $res['StoreConfig'] = $this->storeConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUpdate'])) {
            $model->autoUpdate = $map['AutoUpdate'];
        }
        if (isset($map['AutoUpdateFrequency'])) {
            $model->autoUpdateFrequency = $map['AutoUpdateFrequency'];
        }
        if (isset($map['ClonedId'])) {
            $model->clonedId = $map['ClonedId'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['ExtendParams'])) {
            $model->extendParams = extendParams::fromMap($map['ExtendParams']);
        }
        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StoreConfig'])) {
            $model->storeConfig = $map['StoreConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
