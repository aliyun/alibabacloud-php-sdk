<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysRequest;

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
     * @description 拓展字段
     *
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'appUid'     => 'AppUid',
        'appCid'     => 'AppCid',
        'extensions' => 'Extensions',
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
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
