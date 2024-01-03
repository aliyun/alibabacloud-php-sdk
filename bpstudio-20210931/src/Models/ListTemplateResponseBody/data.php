<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2021-03-18 16:41:31
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The URL of the architecture image.
     *
     * @example bp-studio-template/sr-U37UD2YQCRJ75X5V.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description The name of the template.
     *
     * @example cadt-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyjt3c5om3hi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the tag that is added to the template.
     *
     * @example 1
     *
     * @var int
     */
    public $tagId;

    /**
     * @description The name of the tag that is added to the template.
     *
     * @example Official template
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The ID of the template.
     *
     * @example CJQ6H0XUEQ20IYJQ
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'imageURL'        => 'ImageURL',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'tagId'           => 'TagId',
        'tagName'         => 'TagName',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
