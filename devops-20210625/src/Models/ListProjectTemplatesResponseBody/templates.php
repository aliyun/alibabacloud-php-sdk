<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $copyFrom;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $creator;

    /**
     * @example 迭代的具体信息
     *
     * @var string
     */
    public $description;

    /**
     * @example 1623916393000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1623916393000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example https://img.xxxx.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $modifier;

    /**
     * @example 专用模板
     *
     * @var string
     */
    public $name;

    /**
     * @example Test Template
     *
     * @var string
     */
    public $nameEn;

    /**
     * @example Project
     *
     * @var string
     */
    public $resourceCategory;

    /**
     * @example null
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example null
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example null
     *
     * @var string
     */
    public $spaceType;

    /**
     * @example 4
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'copyFrom'         => 'copyFrom',
        'creator'          => 'creator',
        'description'      => 'description',
        'gmtCreate'        => 'gmtCreate',
        'gmtModified'      => 'gmtModified',
        'icon'             => 'icon',
        'identifier'       => 'identifier',
        'modifier'         => 'modifier',
        'name'             => 'name',
        'nameEn'           => 'nameEn',
        'resourceCategory' => 'resourceCategory',
        'resourceType'     => 'resourceType',
        'spaceIdentifier'  => 'spaceIdentifier',
        'spaceType'        => 'spaceType',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copyFrom) {
            $res['copyFrom'] = $this->copyFrom;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameEn) {
            $res['nameEn'] = $this->nameEn;
        }
        if (null !== $this->resourceCategory) {
            $res['resourceCategory'] = $this->resourceCategory;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['copyFrom'])) {
            $model->copyFrom = $map['copyFrom'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameEn'])) {
            $model->nameEn = $map['nameEn'];
        }
        if (isset($map['resourceCategory'])) {
            $model->resourceCategory = $map['resourceCategory'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
