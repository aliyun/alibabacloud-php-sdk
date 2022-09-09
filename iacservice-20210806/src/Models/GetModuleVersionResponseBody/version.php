<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponseBody;

use AlibabaCloud\Tea\Model;

class version extends Model
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
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

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
     * @var mixed[]
     */
    public $terraformContext;

    /**
     * @var string
     */
    public $versionStrategy;
    protected $_name = [
        'createTime'       => 'createTime',
        'description'      => 'description',
        'moduleId'         => 'moduleId',
        'moduleVersion'    => 'moduleVersion',
        'name'             => 'name',
        'source'           => 'source',
        'sourcePath'       => 'sourcePath',
        'statePath'        => 'statePath',
        'terraformContext' => 'terraformContext',
        'versionStrategy'  => 'versionStrategy',
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
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->terraformContext) {
            $res['terraformContext'] = $this->terraformContext;
        }
        if (null !== $this->versionStrategy) {
            $res['versionStrategy'] = $this->versionStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return version
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
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
        if (isset($map['terraformContext'])) {
            $model->terraformContext = $map['terraformContext'];
        }
        if (isset($map['versionStrategy'])) {
            $model->versionStrategy = $map['versionStrategy'];
        }

        return $model;
    }
}
