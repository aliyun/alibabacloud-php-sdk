<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponseBody\fields\options;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @description 字段类型
     *
     * @var string
     */
    public $className;

    /**
     * @description 创建人id
     *
     * @var string
     */
    public $creator;

    /**
     * @description 默认值
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description 描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 字段格式
     *
     * @var string
     */
    public $format;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 字段唯一标识符
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 是否必填
     *
     * @var bool
     */
    public $isRequired;

    /**
     * @description 创建时是否展示
     *
     * @var bool
     */
    public $isShowWhenCreate;

    /**
     * @description 是否是系统必须字段，比如：负责人、状态等。
     *
     * @var bool
     */
    public $isSystemRequired;

    /**
     * @description 联动的服务，比如：迭代 迭代服务开启/关闭，这个字段字段加进/剔除出对应的模板； 字段模板里，这类字段不能手动添加或删除
     *
     * @var string
     */
    public $linkWithService;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifier;

    /**
     * @description 字段名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 待选值
     *
     * @var options[]
     */
    public $options;

    /**
     * @description 区分不同的适用对象
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 区分不同的类型，如系统字段、用户自定义字段
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'className'        => 'className',
        'creator'          => 'creator',
        'defaultValue'     => 'defaultValue',
        'description'      => 'description',
        'format'           => 'format',
        'gmtCreate'        => 'gmtCreate',
        'gmtModified'      => 'gmtModified',
        'identifier'       => 'identifier',
        'isRequired'       => 'isRequired',
        'isShowWhenCreate' => 'isShowWhenCreate',
        'isSystemRequired' => 'isSystemRequired',
        'linkWithService'  => 'linkWithService',
        'modifier'         => 'modifier',
        'name'             => 'name',
        'options'          => 'options',
        'resourceType'     => 'resourceType',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->isRequired) {
            $res['isRequired'] = $this->isRequired;
        }
        if (null !== $this->isShowWhenCreate) {
            $res['isShowWhenCreate'] = $this->isShowWhenCreate;
        }
        if (null !== $this->isSystemRequired) {
            $res['isSystemRequired'] = $this->isSystemRequired;
        }
        if (null !== $this->linkWithService) {
            $res['linkWithService'] = $this->linkWithService;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['isRequired'])) {
            $model->isRequired = $map['isRequired'];
        }
        if (isset($map['isShowWhenCreate'])) {
            $model->isShowWhenCreate = $map['isShowWhenCreate'];
        }
        if (isset($map['isSystemRequired'])) {
            $model->isSystemRequired = $map['isSystemRequired'];
        }
        if (isset($map['linkWithService'])) {
            $model->linkWithService = $map['linkWithService'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['options'] as $item) {
                    $model->options[$n++] = null !== $item ? options::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
