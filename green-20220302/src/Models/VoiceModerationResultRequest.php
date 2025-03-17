<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class VoiceModerationResultRequest extends Model
{
    /**
     * @description The type of the moderation service. Valid values: nickname_detection: user nickname
     *
     * @example nickname_detection
     *
     * @var string
     */
    public $service;

    /**
     * @description The parameters of API requests that are sent from API Gateway to the backend service.
     *
     * For more information, see [ServiceParameter](https://help.aliyun.com/document_detail/43988.html).
     *
     * @example {"taskId":"xxxxx-xxxx"}
     *
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'service' => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VoiceModerationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
