<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components;
use AlibabaCloud\Tea\Model;

class ModifyChatappTemplateRequest extends Model
{
    /**
     * @example text
     *
     * @var string
     */
    public $category;

    /**
     * @var components[]
     */
    public $components;

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
     * @var string[]
     */
    public $example;

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
     * @example 120
     *
     * @var int
     */
    public $messageSendTtlSeconds;

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
        'category'              => 'Category',
        'components'            => 'Components',
        'custSpaceId'           => 'CustSpaceId',
        'custWabaId'            => 'CustWabaId',
        'example'               => 'Example',
        'isvCode'               => 'IsvCode',
        'language'              => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'templateCode'          => 'TemplateCode',
        'templateType'          => 'TemplateType',
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
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
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
     * @return ModifyChatappTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
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
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
