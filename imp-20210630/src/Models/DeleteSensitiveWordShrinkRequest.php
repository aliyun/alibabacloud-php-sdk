<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class DeleteSensitiveWordShrinkRequest extends Model
{
    /**
     * @description 弹幕发送者的用户ID，最大长度不超过32个字节。
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
     * @return DeleteSensitiveWordShrinkRequest
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
