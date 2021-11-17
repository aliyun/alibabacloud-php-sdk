<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\tagList;
use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 创建者阿里云账号id
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @description 环境id 0 日常环境  1预发环境 2正式环境
     *
     * @var int
     */
    public $envId;

    /**
     * @description 环境名称
     *
     * @var string
     */
    public $envName;

    /**
     * @description 流水线分组id
     *
     * @var int
     */
    public $groupId;

    /**
     * @description 更新人阿里云账号id
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @description 流水线名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 流水线配置
     *
     * @var pipelineConfig
     */
    public $pipelineConfig;

    /**
     * @description 标签
     *
     * @var tagList[]
     */
    public $tagList;

    /**
     * @description 更新时间
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'createTime',
        'creatorAccountId'  => 'creatorAccountId',
        'envId'             => 'envId',
        'envName'           => 'envName',
        'groupId'           => 'groupId',
        'modifierAccountId' => 'modifierAccountId',
        'name'              => 'name',
        'pipelineConfig'    => 'pipelineConfig',
        'tagList'           => 'tagList',
        'updateTime'        => 'updateTime',
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
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }
        if (null !== $this->envName) {
            $res['envName'] = $this->envName;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pipelineConfig) {
            $res['pipelineConfig'] = null !== $this->pipelineConfig ? $this->pipelineConfig->toMap() : null;
        }
        if (null !== $this->tagList) {
            $res['tagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['tagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }
        if (isset($map['envName'])) {
            $model->envName = $map['envName'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pipelineConfig'])) {
            $model->pipelineConfig = pipelineConfig::fromMap($map['pipelineConfig']);
        }
        if (isset($map['tagList'])) {
            if (!empty($map['tagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['tagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
