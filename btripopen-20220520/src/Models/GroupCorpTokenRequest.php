<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GroupCorpTokenRequest extends Model
{
    /**
     * @example ZzljczY5dnFjNDAwVlNofiwoWX5ZWCxlcjVTKnVoZS0
     *
     * @var string
     */
    public $appSecret;

    /**
     * @example open12g9sfbmm5i07v10wDzRSK9w00
     *
     * @var string
     */
    public $corpId;

    /**
     * @example btripuyxmbg3cs286734u_mow6q
     *
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'appSecret' => 'app_secret',
        'corpId'    => 'corp_id',
        'subCorpId' => 'sub_corp_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecret) {
            $res['app_secret'] = $this->appSecret;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupCorpTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['app_secret'])) {
            $model->appSecret = $map['app_secret'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }

        return $model;
    }
}
