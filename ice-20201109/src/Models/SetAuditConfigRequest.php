<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SetAuditConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $legalSwitch;
    protected $_name = [
        'appId'       => 'AppId',
        'channel'     => 'Channel',
        'legalSwitch' => 'LegalSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->legalSwitch) {
            $res['LegalSwitch'] = $this->legalSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAuditConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['LegalSwitch'])) {
            $model->legalSwitch = $map['LegalSwitch'];
        }

        return $model;
    }
}
