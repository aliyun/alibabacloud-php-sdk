<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageLibResponseBody;

use AlibabaCloud\Tea\Model;

class imageLibList extends Model
{
    /**
     * @var string[]
     */
    public $bizTypes;

    /**
     * @example BLACK
     *
     * @var string
     */
    public $category;

    /**
     * @example 808003055
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @example 1279
     *
     * @var int
     */
    public $id;

    /**
     * @example 1912312312
     *
     * @var int
     */
    public $imageCount;

    /**
     * @example 2018-03-19 10:45:44 +0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @example PORN
     *
     * @var string
     */
    public $scene;

    /**
     * @example open_api
     *
     * @var string
     */
    public $serviceModule;

    /**
     * @example MANUAL
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'bizTypes'      => 'BizTypes',
        'category'      => 'Category',
        'code'          => 'Code',
        'enable'        => 'Enable',
        'id'            => 'Id',
        'imageCount'    => 'ImageCount',
        'modifiedTime'  => 'ModifiedTime',
        'name'          => 'Name',
        'scene'         => 'Scene',
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
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
     * @return imageLibList
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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
