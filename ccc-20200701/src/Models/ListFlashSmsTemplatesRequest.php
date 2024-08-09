<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListFlashSmsTemplatesRequest extends Model
{
    /**
     * @example 71b396fa-1*********-70b7c0
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Uincall
     *
     * @var string
     */
    public $providerId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceId'    => 'InstanceId',
        'providerId'    => 'ProviderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlashSmsTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        return $model;
    }
}
