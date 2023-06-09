<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class EnableMultiAccountResourceCenterResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 767038B7-2027-5508-858B-E213232D57D5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the feature. Valid values:
     *
     *   Pending: The feature is being enabled.
     *   Enabled: The feature is enabled.
     *
     * @example Pending
     *
     * @var string
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
     * @return EnableMultiAccountResourceCenterResponseBody
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
