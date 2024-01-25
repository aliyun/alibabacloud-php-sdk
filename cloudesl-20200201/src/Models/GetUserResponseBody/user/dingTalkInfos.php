<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\GetUserResponseBody\user;

use AlibabaCloud\Tea\Model;

class dingTalkInfos extends Model
{
    /**
     * @example 131242
     *
     * @var string
     */
    public $dingTalkCompanyId;

    /**
     * @example 34352525
     *
     * @var string
     */
    public $dingTalkUserId;
    protected $_name = [
        'dingTalkCompanyId' => 'DingTalkCompanyId',
        'dingTalkUserId'    => 'DingTalkUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingTalkCompanyId) {
            $res['DingTalkCompanyId'] = $this->dingTalkCompanyId;
        }
        if (null !== $this->dingTalkUserId) {
            $res['DingTalkUserId'] = $this->dingTalkUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingTalkInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingTalkCompanyId'])) {
            $model->dingTalkCompanyId = $map['DingTalkCompanyId'];
        }
        if (isset($map['DingTalkUserId'])) {
            $model->dingTalkUserId = $map['DingTalkUserId'];
        }

        return $model;
    }
}
