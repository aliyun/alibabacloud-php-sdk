<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyChatappTemplateShrinkRequest extends Model
{
    /**
     * @example text
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $componentsShrink;

    /**
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 659216218162179
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
     * @example ksiekdki39ksks93939
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
     * @example 8472929283883
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'         => 'Category',
        'componentsShrink' => 'Components',
        'custSpaceId'      => 'CustSpaceId',
        'custWabaId'       => 'CustWabaId',
        'exampleShrink'    => 'Example',
        'isvCode'          => 'IsvCode',
        'language'         => 'Language',
        'templateCode'     => 'TemplateCode',
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
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyChatappTemplateShrinkRequest
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
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
