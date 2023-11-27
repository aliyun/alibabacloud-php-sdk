<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UnbindInterconnectionUidRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 12345
     *
     * @var string
     */
    public $appUid;

    /**
     * @example staff#coprId
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
