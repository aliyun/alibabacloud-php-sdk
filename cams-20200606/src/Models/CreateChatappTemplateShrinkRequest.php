<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateChatappTemplateShrinkRequest extends Model
{
    /**
     * @description 模板分类
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $componentsShrink;

    /**
     * @description ISV客户WabaId
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description 变量，KEY-VALUE结构
     *
     * @var string
     */
    public $exampleShrink;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板类型
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'         => 'Category',
        'componentsShrink' => 'Components',
        'custWabaId'       => 'CustWabaId',
        'exampleShrink'    => 'Example',
        'language'         => 'Language',
        'name'             => 'Name',
        'templateType'     => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->exampleShrink) {
            $res['Example'] = $this->exampleShrink;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatappTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Components'])) {
            $model->componentsShrink = $map['Components'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Example'])) {
            $model->exampleShrink = $map['Example'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
