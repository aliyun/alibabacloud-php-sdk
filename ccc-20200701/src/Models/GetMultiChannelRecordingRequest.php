<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetMultiChannelRecordingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example job-6538214103689****
     *
     * @var string
     */
    public $contactId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactId' => 'ContactId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultiChannelRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
