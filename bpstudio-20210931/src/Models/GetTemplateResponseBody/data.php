<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateResponseBody;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateResponseBody\data\variables;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2020-09-22 17:08:31
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Template DescriptionD
     *
     * @example 无
     *
     * @var string
     */
    public $description;

    /**
     * @description The path to the template schema image file
     *
     * @example bp-studio-template/sr-U37UD2YQCRJ75X5V.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description The name of the template
     *
     * @example cadt-template
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzhfgmw4e6fwq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Template ID
     *
     * @example XFKR6WYRVS24S07R
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The details of the template variables.
     *
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'imageURL'        => 'ImageURL',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
        'variables'       => 'Variables',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
