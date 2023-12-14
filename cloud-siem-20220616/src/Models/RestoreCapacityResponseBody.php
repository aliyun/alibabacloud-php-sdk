<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class RestoreCapacityResponseBody extends Model
{
    /**
     * @description Indicates whether the release command has been sent. Valid values:
     *
     *   true: The command has been sent and the storage space is being released.
     *   false: The command failed to be sent.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example 6276D891-58D4-55B2-87B9-74D413F7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreCapacityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
