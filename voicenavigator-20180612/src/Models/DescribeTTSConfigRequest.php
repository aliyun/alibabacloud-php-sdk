<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeTTSConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dc437bba-5a25-4bbc-b4c2-f268864bebb5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1971226538081821
     *
     * @var int
     */
    public $instanceOwnerId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'instanceOwnerId' => 'InstanceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTTSConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }

        return $model;
    }
}
