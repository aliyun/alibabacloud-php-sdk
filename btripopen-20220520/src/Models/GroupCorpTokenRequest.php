<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class GroupCorpTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'appSecret' => 'app_secret',
        'corpId' => 'corp_id',
        'subCorpId' => 'sub_corp_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
