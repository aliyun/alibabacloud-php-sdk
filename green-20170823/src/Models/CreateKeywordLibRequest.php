<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateKeywordLibRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $libType;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceModule;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'bizTypes'      => 'BizTypes',
        'category'      => 'Category',
        'enable'        => 'Enable',
        'lang'          => 'Lang',
        'language'      => 'Language',
        'libType'       => 'LibType',
        'matchMode'     => 'MatchMode',
        'name'          => 'Name',
        'resourceType'  => 'ResourceType',
        'serviceModule' => 'ServiceModule',
        'sourceIp'      => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypes) {
            $res['BizTypes'] = $this->bizTypes;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->libType) {
            $res['LibType'] = $this->libType;
        }
        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceModule) {
            $res['ServiceModule'] = $this->serviceModule;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeywordLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypes'])) {
            $model->bizTypes = $map['BizTypes'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LibType'])) {
            $model->libType = $map['LibType'];
        }
        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceModule'])) {
            $model->serviceModule = $map['ServiceModule'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
