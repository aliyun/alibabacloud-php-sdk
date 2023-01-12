<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RemoveMessagesRequest extends Model
{
    /**
     * @example LMALL2******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example 212112212
     *
     * @var string
     */
    public $messageIds;
    protected $_name = [
        'bizId'      => 'BizId',
        'extJson'    => 'ExtJson',
        'messageIds' => 'MessageIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->messageIds) {
            $res['MessageIds'] = $this->messageIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['MessageIds'])) {
            $model->messageIds = $map['MessageIds'];
        }

        return $model;
    }
}
