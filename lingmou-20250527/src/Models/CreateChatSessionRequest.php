<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Tea\Model;

class CreateChatSessionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example rmq-cn-9t946y43m1d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example b9be4b25c2d38c409c376ffd2372be1
     *
     * @var string
     */
    public $license;

    /**
     * @example Web | Android | iOS
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'instanceId' => 'instanceId',
        'license' => 'license',
        'platform' => 'platform',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->license) {
            $res['license'] = $this->license;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['license'])) {
            $model->license = $map['license'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
