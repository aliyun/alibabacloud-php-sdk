<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLocalDefaultRegionResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F6D23860-55C2-55AA-B484-****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The access type of the multi-cloud site. Valid values:
     *
     *   **0**: The current site is not the default site of the multi-cloud site. You can specify a site as the default site of the multi-cloud site.
     *   **1**: The current site is the default site of the multi-cloud site.
     *   **2**: Another site is set as the default site of the multi-cloud site.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

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
     * @return GetLocalDefaultRegionResponseBody
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
