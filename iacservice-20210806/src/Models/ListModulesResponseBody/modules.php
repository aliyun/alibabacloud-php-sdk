<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponseBody;

use AlibabaCloud\Tea\Model;

class modules extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var mixed[]
     */
    public $meta;

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
    public $source;

    /**
     * @var mixed[]
     */
    public $sourceConfig;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'         => 'createTime',
        'deletionProtection' => 'deletionProtection',
        'description'        => 'description',
        'latestVersion'      => 'latestVersion',
        'meta'               => 'meta',
        'moduleId'           => 'moduleId',
        'name'               => 'name',
        'source'             => 'source',
        'sourceConfig'       => 'sourceConfig',
        'status'             => 'status',
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
        if (null !== $this->deletionProtection) {
            $res['deletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourceConfig) {
            $res['sourceConfig'] = $this->sourceConfig;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['deletionProtection'])) {
            $model->deletionProtection = $map['deletionProtection'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourceConfig'])) {
            $model->sourceConfig = $map['sourceConfig'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
