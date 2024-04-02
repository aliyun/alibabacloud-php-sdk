<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordLibResponseBody;

use AlibabaCloud\Tea\Model;

class keywordLibList extends Model
{
    /**
     * @var string[]
     */
    public $bizTypes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $count;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $id;

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
    public $modifiedTime;

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
    public $source;
    protected $_name = [
        'bizTypes'      => 'BizTypes',
        'category'      => 'Category',
        'code'          => 'Code',
        'count'         => 'Count',
        'enable'        => 'Enable',
        'id'            => 'Id',
        'language'      => 'Language',
        'libType'       => 'LibType',
        'matchMode'     => 'MatchMode',
        'modifiedTime'  => 'ModifiedTime',
        'name'          => 'Name',
        'resourceType'  => 'ResourceType',
        'serviceModule' => 'ServiceModule',
        'source'        => 'Source',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywordLibList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypes'])) {
            if (!empty($map['BizTypes'])) {
                $model->bizTypes = $map['BizTypes'];
            }
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
