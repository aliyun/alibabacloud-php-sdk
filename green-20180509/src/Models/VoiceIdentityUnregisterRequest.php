<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20180509\Models;

use AlibabaCloud\Tea\Model;

class VoiceIdentityUnregisterRequest extends Model
{
    /**
     * @var string
     */
    public $clientInfo;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientInfo' => 'ClientInfo',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VoiceIdentityUnregisterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
