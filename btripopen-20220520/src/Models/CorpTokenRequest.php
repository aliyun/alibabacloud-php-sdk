<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CorpTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appSecret;

    /**
     * @example open324dfsdafsgcxvxv
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appSecret' => 'app_secret',
        'corpId'    => 'corp_id',
        'type'      => 'type',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CorpTokenRequest
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
