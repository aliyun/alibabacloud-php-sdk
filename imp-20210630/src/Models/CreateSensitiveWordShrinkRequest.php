<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateSensitiveWordShrinkRequest extends Model
{
    /**
     * @description 用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $wordListShrink;
    protected $_name = [
        'appId'          => 'AppId',
        'wordListShrink' => 'WordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->wordListShrink) {
            $res['WordList'] = $this->wordListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSensitiveWordShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['WordList'])) {
            $model->wordListShrink = $map['WordList'];
        }

        return $model;
    }
}
