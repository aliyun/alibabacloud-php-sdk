<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveStreamBlockResponseBody extends Model
{
    /**
     * @description The result description. If the request was successful, ok is returned. If the request failed, the failure detail is returned.
     *
     * @example ok
     *
     * @var string
     */
    public $description;

    /**
     * @description The request ID.
     *
     * @example B908FF89-B03C-4831-B55B-48D2A7DA0A68
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status. Valid values:
     *
     *   ok: The request was successful.
     *   fail: The request failed.
     *
     * >  If any parameter failed to be configured, the request failed.
     *
     * @example ok
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
     * @return DeleteLiveStreamBlockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
