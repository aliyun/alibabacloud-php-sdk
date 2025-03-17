<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class DescribeFileModerationResultRequest extends Model
{
    /**
     * @description The type of the moderation service.
     *
     * @example document_detection
     *
     * @var string
     */
    public $service;

    /**
     * @description The parameters required by the moderation service. The value is a JSON string.
     *
     *   taskId: required. The URL of the object that you want to moderate. Make sure that the URL can be accessed over the Internet.
     *
     * @example {\\"taskId\\":\\"vi_f_hPgx9PFIQISdlfA888hOFG-1yJq8v\\"}
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
     * @return DescribeFileModerationResultRequest
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
