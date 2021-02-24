<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 消息ID
     *
     * @var string
     */
    public $msgId;

    /**
     * @description 需设置的K-V对
     *
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'appCid'     => 'AppCid',
        'msgId'      => 'MsgId',
        'extensions' => 'Extensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
