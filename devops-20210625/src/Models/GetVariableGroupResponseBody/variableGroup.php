<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup\relatedPipelines;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup\variables;
use AlibabaCloud\Tea\Model;

class variableGroup extends Model
{
    /**
     * @example 13232343434343
     *
     * @var string
     */
    public $ccreatorAccountId;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 变量组
     *
     * @var string
     */
    public $description;

    /**
     * @example 12234
     *
     * @var int
     */
    public $id;

    /**
     * @example 13232343434343
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @example 变量组
     *
     * @var string
     */
    public $name;

    /**
     * @var relatedPipelines[]
     */
    public $relatedPipelines;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $updateTime;

    /**
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
