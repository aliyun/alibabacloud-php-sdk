<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ClaimGPUInstanceResponseBody extends Model
{
    /**
     * @example 2022-11-11 07:31:04.899465017 +0000 UTC m=+37.671563424
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example i-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0.0.0.0
     *
     * @var string
     */
    public $publicIp;
    protected $_name = [
        'createdTime' => 'createdTime',
        'instanceId'  => 'instanceId',
        'publicIp'    => 'publicIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->publicIp) {
            $res['publicIp'] = $this->publicIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClaimGPUInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['publicIp'])) {
            $model->publicIp = $map['publicIp'];
        }

        return $model;
    }
}
