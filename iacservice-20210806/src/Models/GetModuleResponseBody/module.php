<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputPath;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $statePath;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $versionStrategy;
    protected $_name = [
        'createTime'      => 'createTime',
        'description'     => 'description',
        'latestVersion'   => 'latestVersion',
        'moduleId'        => 'moduleId',
        'name'            => 'name',
        'outputPath'      => 'outputPath',
        'source'          => 'source',
        'sourcePath'      => 'sourcePath',
        'statePath'       => 'statePath',
        'status'          => 'status',
        'versionStrategy' => 'versionStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->outputPath) {
            $res['outputPath'] = $this->outputPath;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }
        if (null !== $this->statePath) {
            $res['statePath'] = $this->statePath;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->versionStrategy) {
            $res['versionStrategy'] = $this->versionStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['outputPath'])) {
            $model->outputPath = $map['outputPath'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }
        if (isset($map['statePath'])) {
            $model->statePath = $map['statePath'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['versionStrategy'])) {
            $model->versionStrategy = $map['versionStrategy'];
        }

        return $model;
    }
}
