<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class TextModerationRequest extends Model
{
    /**
     * @description The type of the moderation service.
     *
     * @example nickname_detection
     *
     * @var string
     */
    public $service;

    /**
     * @description The parameters required by the moderation service. The value is a JSON string.
     *
     * @example {"content":"Content to be moderated"}
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
     * @return TextModerationRequest
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
