<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class CreateModuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $minimumPlatformVersion;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceModuleId;

    /**
     * @var string
     */
    public $targetAppSource;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'description'            => 'Description',
        'icon'                   => 'Icon',
        'minimumPlatformVersion' => 'MinimumPlatformVersion',
        'moduleName'             => 'ModuleName',
        'moduleType'             => 'ModuleType',
        'platform'               => 'Platform',
        'source'                 => 'Source',
        'sourceModuleId'         => 'SourceModuleId',
        'targetAppSource'        => 'TargetAppSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->minimumPlatformVersion) {
            $res['MinimumPlatformVersion'] = $this->minimumPlatformVersion;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceModuleId) {
            $res['SourceModuleId'] = $this->sourceModuleId;
        }
        if (null !== $this->targetAppSource) {
            $res['TargetAppSource'] = $this->targetAppSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['MinimumPlatformVersion'])) {
            $model->minimumPlatformVersion = $map['MinimumPlatformVersion'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceModuleId'])) {
            $model->sourceModuleId = $map['SourceModuleId'];
        }
        if (isset($map['TargetAppSource'])) {
            $model->targetAppSource = $map['TargetAppSource'];
        }

        return $model;
    }
}
