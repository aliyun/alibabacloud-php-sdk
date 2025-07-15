<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainMultiStreamConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F486A44F-6B35-5A96-BF2C-************
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the dual-stream disaster recovery feature is enabled. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example on
     *
     * @var string
     */
    public $switch;
    protected $_name = [
        'requestId' => 'RequestId',
        'switch' => 'Switch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainMultiStreamConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }

        return $model;
    }
}
