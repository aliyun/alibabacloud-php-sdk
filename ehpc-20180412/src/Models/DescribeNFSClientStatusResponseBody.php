<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeNFSClientStatusResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribeNFSClientStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 3EB7FCEE-D731-4948-85A3-4B2C341CA983
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of results.
     *
     * @var result
     */
    public $result;

    /**
     * @description The deployment status of the NFS client. Valid values:
     *
     *   NotInstalled: The client is not installed.
     *   Running: The client is being installed.
     *   Finished: The client is installed on the instance.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
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
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNFSClientStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
