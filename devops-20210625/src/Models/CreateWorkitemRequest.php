<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest\fieldValueList;
use AlibabaCloud\Tea\Model;

class CreateWorkitemRequest extends Model
{
    /**
     * @description 工作项负责人的id，或者企业中的用户名
     *
     * @var string
     */
    public $assignedTo;

    /**
     * @description 工作项的类型id，比如：Bug、Task对应id
     *
     * @var string
     */
    public $category;

    /**
     * @description 工作项内容
     *
     * @var string
     */
    public $description;

    /**
     * @description 内容格式
     *
     * @var string
     */
    public $descriptionFormat;

    /**
     * @description 自定义字段
     *
     * @var fieldValueList[]
     */
    public $fieldValueList;

    /**
     * @description 所属父工作项的唯一标识
     *
     * @var string
     */
    public $parent;

    /**
     * @description 参与人id列表，或者企业名称列表
     *
     * @var string[]
     */
    public $participant;

    /**
     * @description 项目id
     *
     * @var string
     */
    public $space;

    /**
     * @description 项目id
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description 资源类型
     *
     * @var string
     */
    public $spaceType;

    /**
     * @description 要关联迭代
     *
     * @var string[]
     */
    public $sprint;

    /**
     * @description 标题
     *
     * @var string
     */
    public $subject;

    /**
     * @description 抄送人id列表
     *
     * @var string[]
     */
    public $tracker;

    /**
     * @description 验证者id列表，或者企业名称列表
     *
     * @var string[]
     */
    public $verifier;

    /**
     * @description 工作项小类型id
     *
     * @var string
     */
    public $workitemType;
    protected $_name = [
        'assignedTo'        => 'assignedTo',
        'category'          => 'category',
        'description'       => 'description',
        'descriptionFormat' => 'descriptionFormat',
        'fieldValueList'    => 'fieldValueList',
        'parent'            => 'parent',
        'participant'       => 'participant',
        'space'             => 'space',
        'spaceIdentifier'   => 'spaceIdentifier',
        'spaceType'         => 'spaceType',
        'sprint'            => 'sprint',
        'subject'           => 'subject',
        'tracker'           => 'tracker',
        'verifier'          => 'verifier',
        'workitemType'      => 'workitemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->descriptionFormat) {
            $res['descriptionFormat'] = $this->descriptionFormat;
        }
        if (null !== $this->fieldValueList) {
            $res['fieldValueList'] = [];
            if (null !== $this->fieldValueList && \is_array($this->fieldValueList)) {
                $n = 0;
                foreach ($this->fieldValueList as $item) {
                    $res['fieldValueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parent) {
            $res['parent'] = $this->parent;
        }
        if (null !== $this->participant) {
            $res['participant'] = $this->participant;
        }
        if (null !== $this->space) {
            $res['space'] = $this->space;
        }
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }
        if (null !== $this->sprint) {
            $res['sprint'] = $this->sprint;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->tracker) {
            $res['tracker'] = $this->tracker;
        }
        if (null !== $this->verifier) {
            $res['verifier'] = $this->verifier;
        }
        if (null !== $this->workitemType) {
            $res['workitemType'] = $this->workitemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignedTo'])) {
            $model->assignedTo = $map['assignedTo'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['descriptionFormat'])) {
            $model->descriptionFormat = $map['descriptionFormat'];
        }
        if (isset($map['fieldValueList'])) {
            if (!empty($map['fieldValueList'])) {
                $model->fieldValueList = [];
                $n                     = 0;
                foreach ($map['fieldValueList'] as $item) {
                    $model->fieldValueList[$n++] = null !== $item ? fieldValueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['parent'])) {
            $model->parent = $map['parent'];
        }
        if (isset($map['participant'])) {
            if (!empty($map['participant'])) {
                $model->participant = $map['participant'];
            }
        }
        if (isset($map['space'])) {
            $model->space = $map['space'];
        }
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }
        if (isset($map['sprint'])) {
            if (!empty($map['sprint'])) {
                $model->sprint = $map['sprint'];
            }
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['tracker'])) {
            if (!empty($map['tracker'])) {
                $model->tracker = $map['tracker'];
            }
        }
        if (isset($map['verifier'])) {
            if (!empty($map['verifier'])) {
                $model->verifier = $map['verifier'];
            }
        }
        if (isset($map['workitemType'])) {
            $model->workitemType = $map['workitemType'];
        }

        return $model;
    }
}
