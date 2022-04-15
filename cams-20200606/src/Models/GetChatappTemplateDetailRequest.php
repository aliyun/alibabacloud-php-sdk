<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatappTemplateDetailRequest extends Model
{
    /**
     * @description ISV客户WabaId
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 模板分类
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'custWabaId'   => 'CustWabaId',
        'language'     => 'Language',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatappTemplateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
