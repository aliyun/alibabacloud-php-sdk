<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSiteNameExclusiveResponseBody extends Model
{
    /**
     * @description Indicates whether site hold is enabled. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description The request ID.
     *
     * @example 35C66C7B-671H-4297-9187-2C4477247A78
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
     * @return GetSiteNameExclusiveResponseBody
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
