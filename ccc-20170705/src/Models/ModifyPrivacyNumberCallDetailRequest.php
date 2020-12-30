<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifyPrivacyNumberCallDetailRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $contactId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'callId'     => 'CallId',
        'contactId'  => 'ContactId',
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
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrivacyNumberCallDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        return $model;
    }
}
