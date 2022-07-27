<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponseBody;

use AlibabaCloud\Tea\Model;

class workitemTypes extends Model
{
    /**
     * @var string
     */
    public $addUser;

    /**
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $defaultType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $gmtAdd;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameEn;

    /**
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
