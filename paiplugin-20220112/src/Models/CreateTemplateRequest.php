<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @description 模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，营销短信必须在结尾添加“回T退订”。
     *
     * @var string
     */
    public $content;

    /**
     * @description 申请说明。
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 签名名称，同时只能指定签名名称或签名Id其中之一。
     *
     * @var string
     */
    public $signature;

    /**
     * @description 签名Id，可通过ListSignatures获取审核状态为已通过的签名列表，获取签名Id。
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 模板类型。
     * - 2 : 推广短信。
     * @var int
     */
    public $type;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'name'        => 'Name',
        'signature'   => 'Signature',
        'signatureId' => 'SignatureId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
