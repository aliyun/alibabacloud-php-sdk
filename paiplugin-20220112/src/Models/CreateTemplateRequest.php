<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @description 模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，营销短信必须在结尾添加“回T退订”。
     *
     * @example 模板内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 申请说明。
     *
     * @example 申请说明
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板名称。
     *
     * @example 模板召回-20220101
     *
     * @var string
     */
    public $name;

    /**
     * @description 签名名称，同时只能指定签名名称或签名ID其中之一。
     *
     * @example PAI
     *
     * @var string
     */
    public $signature;

    /**
     * @description 签名ID，可通过ListSignatures获取审核状态为已通过的签名列表，获取签名ID。
     *
     * @example 5480e3e7-f578-42d2-8ce8-217dec75f2e6
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 模板类型。
     * - 2 : 推广短信。
     * @example 2
     *
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
