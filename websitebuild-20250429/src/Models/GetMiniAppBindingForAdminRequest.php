<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetMiniAppBindingForAdminRequest extends Model
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
    public $platformAppid;
    protected $_name = [
        'bizId' => 'BizId',
        'channel' => 'Channel',
        'platformAppid' => 'PlatformAppid',
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

        if (null !== $this->platformAppid) {
            $res['PlatformAppid'] = $this->platformAppid;
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

        if (isset($map['PlatformAppid'])) {
            $model->platformAppid = $map['PlatformAppid'];
        }

        return $model;
    }
}
