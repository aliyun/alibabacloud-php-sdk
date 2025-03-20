<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetDevelopmentModeResponseBody extends Model
{
    /**
     * @description Switch. Values:
     *
     * - **on**: Enabled.
     * - **off**: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description Request ID.
     *
     * @example 156A6B-677B1A-4297B7-9187B7-2B44792
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enable' => 'Enable',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDevelopmentModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
