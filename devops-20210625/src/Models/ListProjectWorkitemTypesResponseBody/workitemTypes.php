<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponseBody;

use AlibabaCloud\Tea\Model;

class workitemTypes extends Model
{
    /**
     * @description 添加到项目中的添加人
     *
     * @var string
     */
    public $addUser;

    /**
     * @description 工作项类型
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @description 工作项类型创建人
     *
     * @var string
     */
    public $creator;

    /**
     * @description 在项目中是否为默认类型
     *
     * @var bool
     */
    public $defaultType;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 是否启用
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 添加到项目中的时间
     *
     * @var int
     */
    public $gmtAdd;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 工作项类型id
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 工作项类型的名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 工作项类型的英文名称
     *
     * @var string
     */
    public $nameEn;

    /**
     * @description 是否系统默认
     *
     * @var bool
     */
    public $systemDefault;
    protected $_name = [
        'addUser'            => 'addUser',
        'categoryIdentifier' => 'categoryIdentifier',
        'creator'            => 'creator',
        'defaultType'        => 'defaultType',
        'description'        => 'description',
        'enable'             => 'enable',
        'gmtAdd'             => 'gmtAdd',
        'gmtCreate'          => 'gmtCreate',
        'identifier'         => 'identifier',
        'name'               => 'name',
        'nameEn'             => 'nameEn',
        'systemDefault'      => 'systemDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addUser) {
            $res['addUser'] = $this->addUser;
        }
        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->defaultType) {
            $res['defaultType'] = $this->defaultType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->gmtAdd) {
            $res['gmtAdd'] = $this->gmtAdd;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameEn) {
            $res['nameEn'] = $this->nameEn;
        }
        if (null !== $this->systemDefault) {
            $res['systemDefault'] = $this->systemDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitemTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addUser'])) {
            $model->addUser = $map['addUser'];
        }
        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['defaultType'])) {
            $model->defaultType = $map['defaultType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['gmtAdd'])) {
            $model->gmtAdd = $map['gmtAdd'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameEn'])) {
            $model->nameEn = $map['nameEn'];
        }
        if (isset($map['systemDefault'])) {
            $model->systemDefault = $map['systemDefault'];
        }

        return $model;
    }
}
