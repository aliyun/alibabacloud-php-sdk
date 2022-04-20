<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class DeleteSensitiveWordRequest extends Model
{
    /**
     * @description 弹幕发送者的用户ID，最大长度不超过32个字节。
     *
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $wordList;
    protected $_name = [
        'appId'    => 'AppId',
        'wordList' => 'WordList',
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
        if (null !== $this->wordList) {
            $res['WordList'] = $this->wordList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSensitiveWordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['WordList'])) {
            if (!empty($map['WordList'])) {
                $model->wordList = $map['WordList'];
            }
        }

        return $model;
    }
}
