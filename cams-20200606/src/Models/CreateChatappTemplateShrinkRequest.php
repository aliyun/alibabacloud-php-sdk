<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CreateChatappTemplateShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allowCategoryChange;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $categoryChangePaused;

    /**
     * @var string
     */
    public $componentsShrink;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $custWabaId;

    /**
     * @var string
     */
    public $exampleShrink;

    /**
     * @var string
     */
    public $isvCode;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $messageSendTtlSeconds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'allowCategoryChange' => 'AllowCategoryChange',
        'category' => 'Category',
        'categoryChangePaused' => 'CategoryChangePaused',
        'componentsShrink' => 'Components',
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'exampleShrink' => 'Example',
        'isvCode' => 'IsvCode',
        'language' => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'name' => 'Name',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCategoryChange) {
            $res['AllowCategoryChange'] = $this->allowCategoryChange;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->categoryChangePaused) {
            $res['CategoryChangePaused'] = $this->categoryChangePaused;
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

        if (null !== $this->messageSendTtlSeconds) {
            $res['MessageSendTtlSeconds'] = $this->messageSendTtlSeconds;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCategoryChange'])) {
            $model->allowCategoryChange = $map['AllowCategoryChange'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CategoryChangePaused'])) {
            $model->categoryChangePaused = $map['CategoryChangePaused'];
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

        if (isset($map['MessageSendTtlSeconds'])) {
            $model->messageSendTtlSeconds = $map['MessageSendTtlSeconds'];
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
