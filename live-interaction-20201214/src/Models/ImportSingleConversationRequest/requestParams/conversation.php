<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationRequest\requestParams;

use AlibabaCloud\Tea\Model;

class conversation extends Model
{
    /**
     * @description 会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 用户ID列表
     *
     * @var string[]
     */
    public $appUids;

    /**
     * @description 扩展字段
     *
     * @var string[]
     */
    public $extensions;

    /**
     * @var int
     */
    public $createTime;
    protected $_name = [
        'appCid'     => 'AppCid',
        'appUids'    => 'AppUids',
        'extensions' => 'Extensions',
        'createTime' => 'CreateTime',
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
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
