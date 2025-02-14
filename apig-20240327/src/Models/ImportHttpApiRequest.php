<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest\specOssConfig;

class ImportHttpApiRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $specContentBase64;
    /**
     * @var string
     */
    public $specFileUrl;
    /**
     * @var specOssConfig
     */
    public $specOssConfig;
    /**
     * @var string
     */
    public $strategy;
    /**
     * @var string
     */
    public $targetHttpApiId;
    /**
     * @var HttpApiVersionConfig
     */
    public $versionConfig;
    protected $_name = [
        'description'       => 'description',
        'dryRun'            => 'dryRun',
        'name'              => 'name',
        'resourceGroupId'   => 'resourceGroupId',
        'specContentBase64' => 'specContentBase64',
        'specFileUrl'       => 'specFileUrl',
        'specOssConfig'     => 'specOssConfig',
        'strategy'          => 'strategy',
        'targetHttpApiId'   => 'targetHttpApiId',
        'versionConfig'     => 'versionConfig',
    ];

    public function validate()
    {
        if (null !== $this->specOssConfig) {
            $this->specOssConfig->validate();
        }
        if (null !== $this->versionConfig) {
            $this->versionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->specContentBase64) {
            $res['specContentBase64'] = $this->specContentBase64;
        }

        if (null !== $this->specFileUrl) {
            $res['specFileUrl'] = $this->specFileUrl;
        }

        if (null !== $this->specOssConfig) {
            $res['specOssConfig'] = null !== $this->specOssConfig ? $this->specOssConfig->toArray($noStream) : $this->specOssConfig;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
        }

        if (null !== $this->targetHttpApiId) {
            $res['targetHttpApiId'] = $this->targetHttpApiId;
        }

        if (null !== $this->versionConfig) {
            $res['versionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toArray($noStream) : $this->versionConfig;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['specContentBase64'])) {
            $model->specContentBase64 = $map['specContentBase64'];
        }

        if (isset($map['specFileUrl'])) {
            $model->specFileUrl = $map['specFileUrl'];
        }

        if (isset($map['specOssConfig'])) {
            $model->specOssConfig = specOssConfig::fromMap($map['specOssConfig']);
        }

        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }

        if (isset($map['targetHttpApiId'])) {
            $model->targetHttpApiId = $map['targetHttpApiId'];
        }

        if (isset($map['versionConfig'])) {
            $model->versionConfig = HttpApiVersionConfig::fromMap($map['versionConfig']);
        }

        return $model;
    }
}
