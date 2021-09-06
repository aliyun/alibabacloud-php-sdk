<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 群会话id
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 禁言白名单
     *
     * @var string[]
     */
    public $whitelist;

    /**
     * @description 禁言黑名单用户及对应禁言时长
     *
     * @var int[]
     */
    public $blacklist;
    protected $_name = [
        'appCid'    => 'AppCid',
        'whitelist' => 'Whitelist',
        'blacklist' => 'Blacklist',
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
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }
        if (null !== $this->blacklist) {
            $res['Blacklist'] = $this->blacklist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = $map['Whitelist'];
            }
        }
        if (isset($map['Blacklist'])) {
            $model->blacklist = $map['Blacklist'];
        }

        return $model;
    }
}
