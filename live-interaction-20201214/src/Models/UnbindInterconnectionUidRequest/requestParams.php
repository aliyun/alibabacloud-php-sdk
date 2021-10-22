<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UnbindInterconnectionUidRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description AIM 用户ID
     *
     * @var string
     */
    public $appUid;

    /**
     * @description 钉钉 用户ID
     *
     * @var string
     */
    public $dingTalkUid;
    protected $_name = [
        'appUid'      => 'AppUid',
        'dingTalkUid' => 'DingTalkUid',
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
        if (null !== $this->dingTalkUid) {
            $res['DingTalkUid'] = $this->dingTalkUid;
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
        if (isset($map['DingTalkUid'])) {
            $model->dingTalkUid = $map['DingTalkUid'];
        }

        return $model;
    }
}
