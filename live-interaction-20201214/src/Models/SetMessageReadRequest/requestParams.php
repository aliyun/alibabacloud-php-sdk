<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageReadRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 95****010
     *
     * @var string
     */
    public $appUid;

    /**
     * @example 280****5705.center_daily
     *
     * @var string
     */
    public $msgId;
    protected $_name = [
        'appUid' => 'AppUid',
        'msgId'  => 'MsgId',
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
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
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
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        return $model;
    }
}
