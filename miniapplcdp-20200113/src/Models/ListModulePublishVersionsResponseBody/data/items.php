<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulePublishVersionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $commitId;

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
    public $modifiedTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $platformVersion;

    /**
     * @var string
     */
    public $publishId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'commitId'        => 'CommitId',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'modifiedTime'    => 'ModifiedTime',
        'moduleId'        => 'ModuleId',
        'platformVersion' => 'PlatformVersion',
        'publishId'       => 'PublishId',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitId) {
            $res['CommitId'] = $this->commitId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->platformVersion) {
            $res['PlatformVersion'] = $this->platformVersion;
        }
        if (null !== $this->publishId) {
            $res['PublishId'] = $this->publishId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommitId'])) {
            $model->commitId = $map['CommitId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['PlatformVersion'])) {
            $model->platformVersion = $map['PlatformVersion'];
        }
        if (isset($map['PublishId'])) {
            $model->publishId = $map['PublishId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
