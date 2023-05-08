<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateChatappTemplateShrinkRequest extends Model
{
    /**
     * @description 是否允许facebook自动变更模板的目录（这样能提高模板的审核通过率）此属性只对TemplateType=WHATSAPP有效
     *
     * @example true
     *
     * @var bool
     */
    public $allowCategoryChange;

    /**
     * @description The returned data.
     *
     * @example The code of the message template.
     *
     * @var string
     */
    public $category;

    /**
     * @description The name of the message template.
     *
     * @var string
     */
    public $componentsShrink;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @var string
     */
    public $exampleShrink;

    /**
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'allowCategoryChange' => 'AllowCategoryChange',
        'category'            => 'Category',
        'componentsShrink'    => 'Components',
        'custSpaceId'         => 'CustSpaceId',
        'custWabaId'          => 'CustWabaId',
        'exampleShrink'       => 'Example',
        'isvCode'             => 'IsvCode',
        'language'            => 'Language',
        'name'                => 'Name',
        'templateType'        => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCategoryChange) {
            $res['AllowCategoryChange'] = $this->allowCategoryChange;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->exampleShrink) {
            $res['Example'] = $this->exampleShrink;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
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
        if (isset($map['AllowCategoryChange'])) {
            $model->allowCategoryChange = $map['AllowCategoryChange'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Components'])) {
            $model->componentsShrink = $map['Components'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Example'])) {
            $model->exampleShrink = $map['Example'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
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
