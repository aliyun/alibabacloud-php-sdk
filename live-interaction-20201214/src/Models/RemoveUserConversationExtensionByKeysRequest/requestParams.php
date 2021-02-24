<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 用户id
     *
     * @var string
     */
    public $appUid;

    /**
     * @description 会话id
     *
     * @var string
     */
    public $appCid;

    /**
     * @var string[]
     */
    public $keys;
    protected $_name = [
        'appUid' => 'AppUid',
        'appCid' => 'AppCid',
        'keys'   => 'Keys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
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
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }

        return $model;
    }
}
