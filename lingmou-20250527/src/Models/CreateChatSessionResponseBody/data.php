<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody;

use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data\avatarAssets;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data\rtcParams;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var avatarAssets
     */
    public $avatarAssets;

    /**
     * @var rtcParams
     */
    public $rtcParams;

    /**
     * @example 9827f4bd-5008-4d34-98fb-62598f3ad3b5
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'avatarAssets' => 'avatarAssets',
        'rtcParams' => 'rtcParams',
        'sessionId' => 'sessionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarAssets) {
            $res['avatarAssets'] = null !== $this->avatarAssets ? $this->avatarAssets->toMap() : null;
        }
        if (null !== $this->rtcParams) {
            $res['rtcParams'] = null !== $this->rtcParams ? $this->rtcParams->toMap() : null;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatarAssets'])) {
            $model->avatarAssets = avatarAssets::fromMap($map['avatarAssets']);
        }
        if (isset($map['rtcParams'])) {
            $model->rtcParams = rtcParams::fromMap($map['rtcParams']);
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
