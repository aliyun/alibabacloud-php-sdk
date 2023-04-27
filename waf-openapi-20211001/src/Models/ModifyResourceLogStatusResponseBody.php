<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyResourceLogStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 7C55A3E5-638A-5D6E-9A2F-C3CE5A677EC5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the log collection feature is enabled for the protected object. Valid values:
     *
     *   **true:** The log collection feature is enabled.
     *   **false:** The log collection feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyResourceLogStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
