<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetMiniAppAuthUrlRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $redirectUri;
    protected $_name = [
        'bizId' => 'BizId',
        'channel' => 'Channel',
        'redirectUri' => 'RedirectUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->redirectUri) {
            $res['RedirectUri'] = $this->redirectUri;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['RedirectUri'])) {
            $model->redirectUri = $map['RedirectUri'];
        }

        return $model;
    }
}
