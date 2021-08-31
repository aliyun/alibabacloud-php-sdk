<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponseBody\variableGroups\relatedPipelines;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponseBody\variableGroups\variables;
use AlibabaCloud\Tea\Model;

class variableGroups extends Model
{
    /**
     * @description 创建人阿里云账号id
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @description 更新时间
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 更新人阿里云账号id
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @description 变量组描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 变量组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 变量组id
     *
     * @var int
     */
    public $id;

    /**
     * @description 关联的流水线
     *
     * @var relatedPipelines[]
     */
    public $relatedPipelines;

    /**
     * @description 变量
     *
     * @var variables[]
     */
    public $variables;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;
    protected $_name = [
        'creatorAccountId'  => 'creatorAccountId',
        'updateTime'        => 'updateTime',
        'modifierAccountId' => 'modifierAccountId',
        'description'       => 'description',
        'name'              => 'name',
        'id'                => 'id',
        'relatedPipelines'  => 'relatedPipelines',
        'variables'         => 'variables',
        'createTime'        => 'createTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->relatedPipelines) {
            $res['relatedPipelines'] = [];
            if (null !== $this->relatedPipelines && \is_array($this->relatedPipelines)) {
                $n = 0;
                foreach ($this->relatedPipelines as $item) {
                    $res['relatedPipelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['relatedPipelines'])) {
            if (!empty($map['relatedPipelines'])) {
                $model->relatedPipelines = [];
                $n                       = 0;
                foreach ($map['relatedPipelines'] as $item) {
                    $model->relatedPipelines[$n++] = null !== $item ? relatedPipelines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        return $model;
    }
}
