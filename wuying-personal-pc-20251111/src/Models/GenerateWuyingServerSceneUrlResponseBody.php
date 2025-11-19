<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class GenerateWuyingServerSceneUrlResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireDurationHours;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'expireDurationHours' => 'ExpireDurationHours',
        'expireTime' => 'ExpireTime',
        'requestId' => 'RequestId',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireDurationHours) {
            $res['ExpireDurationHours'] = $this->expireDurationHours;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ExpireDurationHours'])) {
            $model->expireDurationHours = $map['ExpireDurationHours'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
