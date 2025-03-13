<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\tagList;
use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 112222122
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example 0
     *
     * @var int
     */
    public $envId;

    /**
     * @example 日常环境
     *
     * @var string
     */
    public $envName;

    /**
     * @example 1111
     *
     * @var int
     */
    public $groupId;

    /**
     * @example 112222122
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @example 流水线
     *
     * @var string
     */
    public $name;

    /**
     * @var pipelineConfig
     */
    public $pipelineConfig;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @example 1586863220000
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
