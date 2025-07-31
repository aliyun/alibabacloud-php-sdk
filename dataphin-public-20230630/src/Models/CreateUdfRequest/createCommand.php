<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateUdfRequest;

use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example com.lydaas.SleepTest
     *
     * @var string
     */
    public $className;

    /**
     * @description This parameter is required.
     *
     * @example udf_sleep(100)
     *
     * @var string
     */
    public $commandHelp;

    /**
     * @description This parameter is required.
     *
     * @example 测试
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $computeEngineType;

    /**
     * @description This parameter is required.
     *
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @example /
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example my_udf
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 711833
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $refResourceIdList;
    protected $_name = [
        'category' => 'Category',
        'className' => 'ClassName',
        'commandHelp' => 'CommandHelp',
        'comment' => 'Comment',
        'computeEngineType' => 'ComputeEngineType',
        'description' => 'Description',
        'directory' => 'Directory',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'refResourceIdList' => 'RefResourceIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->commandHelp) {
            $res['CommandHelp'] = $this->commandHelp;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->computeEngineType) {
            $res['ComputeEngineType'] = $this->computeEngineType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->refResourceIdList) {
            $res['RefResourceIdList'] = $this->refResourceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['CommandHelp'])) {
            $model->commandHelp = $map['CommandHelp'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ComputeEngineType'])) {
            $model->computeEngineType = $map['ComputeEngineType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RefResourceIdList'])) {
            if (!empty($map['RefResourceIdList'])) {
                $model->refResourceIdList = $map['RefResourceIdList'];
            }
        }

        return $model;
    }
}
