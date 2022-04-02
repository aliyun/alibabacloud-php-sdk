<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description 号码
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 所发送消息的文本
     *
     * @var string
     */
    public $text;

    /**
     * @description 按钮类型
     * PHONE_NUMBER（电话）,URL（网页按钮）和QUICK_REPLY（快速回复）
     * @var string
     */
    public $type;

    /**
     * @description 点击按钮后将访问的网址
     *
     * @var string
     */
    public $url;

    /**
     * @description 网址类型 static-静态dynamic-动态
     *
     * @var string
     */
    public $urlType;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'text'        => 'Text',
        'type'        => 'Type',
        'url'         => 'Url',
        'urlType'     => 'UrlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->urlType) {
            $res['UrlType'] = $this->urlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buttons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UrlType'])) {
            $model->urlType = $map['UrlType'];
        }

        return $model;
    }
}
