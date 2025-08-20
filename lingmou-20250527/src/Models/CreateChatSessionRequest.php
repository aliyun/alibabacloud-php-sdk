<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CreateChatSessionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $license;

    /**
     * @var string
     */
    public $platform;
    protected $_name = [
        'instanceId' => 'instanceId',
        'license' => 'license',
        'platform' => 'platform',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
