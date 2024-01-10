<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListDiagnosticsResponseBody\diagnostics;
use AlibabaCloud\Tea\Model;

class ListDiagnosticsResponseBody extends Model
{
    /**
     * @description The items that are diagnosed.
     *
     * @var diagnostics[]
     */
    public $diagnostics;

    /**
     * @description The HTTP status code returned. The value 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The error message returned.
     *
     * @example You are not authorized to complete this action.
     *
     * @var string
     */
    public $message;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f01****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 1983D1C4-88EA-5D7D-90AB-467D01867A5D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'diagnostics'    => 'Diagnostics',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnostics) {
            $res['Diagnostics'] = [];
            if (null !== $this->diagnostics && \is_array($this->diagnostics)) {
                $n = 0;
                foreach ($this->diagnostics as $item) {
                    $res['Diagnostics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnosticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Diagnostics'])) {
            if (!empty($map['Diagnostics'])) {
                $model->diagnostics = [];
                $n                  = 0;
                foreach ($map['Diagnostics'] as $item) {
                    $model->diagnostics[$n++] = null !== $item ? diagnostics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
