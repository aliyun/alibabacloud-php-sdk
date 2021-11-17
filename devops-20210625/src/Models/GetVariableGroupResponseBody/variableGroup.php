<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup\relatedPipelines;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup\variables;
use AlibabaCloud\Tea\Model;

class variableGroup extends Model
{
    /**
     * @description 创建人阿里云账号id
     *
     * @var string
     */
    public $ccreatorAccountId;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 变量组描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 变量组id
     *
     * @var int
     */
    public $id;

    /**
     * @description 更新人阿里云账号id
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @description 变量组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 关联的流水线
     *
     * @var relatedPipelines[]
     */
    public $relatedPipelines;

    /**
     * @description 更新时间
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 变量
     *
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'ccreatorAccountId' => 'ccreatorAccountId',
        'createTime'        => 'createTime',
        'description'       => 'description',
        'id'                => 'id',
        'modifierAccountId' => 'modifierAccountId',
        'name'              => 'name',
        'relatedPipelines'  => 'relatedPipelines',
        'updateTime'        => 'updateTime',
        'variables'         => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccreatorAccountId) {
            $res['ccreatorAccountId'] = $this->ccreatorAccountId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ccreatorAccountId'])) {
            $model->ccreatorAccountId = $map['ccreatorAccountId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
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

        return $model;
    }
}
