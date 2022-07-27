<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponseBody\fields\options;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var bool
     */
    public $isShowWhenCreate;

    /**
     * @var bool
     */
    public $isSystemRequired;

    /**
     * @var string
     */
    public $linkWithService;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var options[]
     */
    public $options;

    /**
     * @var string
     */
    public $resourceType;

    /**
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
