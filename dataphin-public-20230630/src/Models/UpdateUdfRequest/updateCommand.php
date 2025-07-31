<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUdfRequest;

use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10
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
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 1123
     *
     * @var int
     */
    public $id;

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
        'description' => 'Description',
        'id' => 'Id',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return updateCommand
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
