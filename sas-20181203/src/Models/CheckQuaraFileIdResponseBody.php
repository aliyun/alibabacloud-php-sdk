<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckQuaraFileIdResponseBody extends Model
{
    /**
     * @description Indicates whether the ID of the quarantined file is valid. Valid values:
     *
     *   **true**: The ID of the quarantined file is valid.
     *   **false**: The ID of the quarantined file is invalid.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
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
     * @return CheckQuaraFileIdResponseBody
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
