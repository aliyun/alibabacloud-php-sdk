<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @description 模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，必须在结尾添加”回T退订“
     *
     * @var string
     */
    public $content;

    /**
     * @description 申请说明
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 无需填写
     *
     * @var string
     */
    public $processInstanceID;

    /**
     * @description 签名ID
     *
     * @var string
     */
    public $signatureID;

    /**
     * @description 模板类型：
     * 3：国际/港澳台消息。
     * @var int
     */
    public $type;
    protected $_name = [
        'content'           => 'Content',
        'description'       => 'Description',
        'name'              => 'Name',
        'processInstanceID' => 'ProcessInstanceID',
        'signatureID'       => 'SignatureID',
        'type'              => 'Type',
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
        if (null !== $this->processInstanceID) {
            $res['ProcessInstanceID'] = $this->processInstanceID;
        }
        if (null !== $this->signatureID) {
            $res['SignatureID'] = $this->signatureID;
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
        if (isset($map['ProcessInstanceID'])) {
            $model->processInstanceID = $map['ProcessInstanceID'];
        }
        if (isset($map['SignatureID'])) {
            $model->signatureID = $map['SignatureID'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
