<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data\avatarAssets;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data\rtcParams;

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
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'avatarAssets' => 'avatarAssets',
        'rtcParams' => 'rtcParams',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        if (null !== $this->avatarAssets) {
            $this->avatarAssets->validate();
        }
        if (null !== $this->rtcParams) {
            $this->rtcParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarAssets) {
            $res['avatarAssets'] = null !== $this->avatarAssets ? $this->avatarAssets->toArray($noStream) : $this->avatarAssets;
        }

        if (null !== $this->rtcParams) {
            $res['rtcParams'] = null !== $this->rtcParams ? $this->rtcParams->toArray($noStream) : $this->rtcParams;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
