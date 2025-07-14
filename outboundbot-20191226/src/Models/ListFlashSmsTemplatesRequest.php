<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListFlashSmsTemplatesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example fe542524-9585-4cc7-be54-c8782ed7f60e
     *
     * @var string
     */
    public $configId;

    /**
     * @description This parameter is required.
     *
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example Uincall
     *
     * @var string
     */
    public $providerId;
    protected $_name = [
        'configId' => 'ConfigId',
        'instanceId' => 'InstanceId',
        'providerId' => 'ProviderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
