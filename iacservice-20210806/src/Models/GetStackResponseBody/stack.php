<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackResponseBody\stack\config;

class stack extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentConfigVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ramRole;

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
    public $stackId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $triggerStrategy;

    /**
     * @var string
     */
    public $workingDirectory;
    protected $_name = [
        'config' => 'config',
        'createTime' => 'createTime',
        'currentConfigVersion' => 'currentConfigVersion',
        'description' => 'description',
        'name' => 'name',
        'ramRole' => 'ramRole',
        'source' => 'source',
        'sourcePath' => 'sourcePath',
        'stackId' => 'stackId',
        'status' => 'status',
        'triggerStrategy' => 'triggerStrategy',
        'workingDirectory' => 'workingDirectory',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentConfigVersion) {
            $res['currentConfigVersion'] = $this->currentConfigVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }

        if (null !== $this->stackId) {
            $res['stackId'] = $this->stackId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        if (null !== $this->workingDirectory) {
            $res['workingDirectory'] = $this->workingDirectory;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentConfigVersion'])) {
            $model->currentConfigVersion = $map['currentConfigVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        if (isset($map['stackId'])) {
            $model->stackId = $map['stackId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        if (isset($map['workingDirectory'])) {
            $model->workingDirectory = $map['workingDirectory'];
        }

        return $model;
    }
}
