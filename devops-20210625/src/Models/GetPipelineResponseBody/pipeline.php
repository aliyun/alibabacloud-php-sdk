<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\tagList;

class pipeline extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $modifierAccountId;

    /**
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
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'creatorAccountId' => 'creatorAccountId',
        'envId' => 'envId',
        'envName' => 'envName',
        'groupId' => 'groupId',
        'modifierAccountId' => 'modifierAccountId',
        'name' => 'name',
        'pipelineConfig' => 'pipelineConfig',
        'tagList' => 'tagList',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (null !== $this->pipelineConfig) {
            $this->pipelineConfig->validate();
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['pipelineConfig'] = null !== $this->pipelineConfig ? $this->pipelineConfig->toArray($noStream) : $this->pipelineConfig;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['tagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['tagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
                $n1 = 0;
                foreach ($map['tagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
