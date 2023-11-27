<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionCidRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$112345
     *
     * @var string
     */
    public $aimAppCid;

    /**
     * @example 111489
     *
     * @var string
     */
    public $dingTalkCid;
    protected $_name = [
        'aimAppCid'   => 'AimAppCid',
        'dingTalkCid' => 'DingTalkCid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aimAppCid) {
            $res['AimAppCid'] = $this->aimAppCid;
        }
        if (null !== $this->dingTalkCid) {
            $res['DingTalkCid'] = $this->dingTalkCid;
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
        if (isset($map['AimAppCid'])) {
            $model->aimAppCid = $map['AimAppCid'];
        }
        if (isset($map['DingTalkCid'])) {
            $model->dingTalkCid = $map['DingTalkCid'];
        }

        return $model;
    }
}
