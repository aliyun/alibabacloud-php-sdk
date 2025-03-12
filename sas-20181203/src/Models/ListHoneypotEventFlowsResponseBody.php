<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody\honeypotEventFlows;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListHoneypotEventFlowsResponseBody extends Model
{
    /**
     * @description The status code. The status code **200** indicates that the request was successful. Other status codes indicate that the request failed. You can identify the cause of the failure based on the status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The attack timelines.
     *
     * @var honeypotEventFlows[]
     */
    public $honeypotEventFlows;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The returned message.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 9F4E6157-9600-5588-86B9-38F09067****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'honeypotEventFlows' => 'HoneypotEventFlows',
        'httpStatusCode'     => 'HttpStatusCode',
        'message'            => 'Message',
        'pageInfo'           => 'PageInfo',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->honeypotEventFlows) {
            $res['HoneypotEventFlows'] = [];
            if (null !== $this->honeypotEventFlows && \is_array($this->honeypotEventFlows)) {
                $n = 0;
                foreach ($this->honeypotEventFlows as $item) {
                    $res['HoneypotEventFlows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
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
     * @return ListHoneypotEventFlowsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HoneypotEventFlows'])) {
            if (!empty($map['HoneypotEventFlows'])) {
                $model->honeypotEventFlows = [];
                $n                         = 0;
                foreach ($map['HoneypotEventFlows'] as $item) {
                    $model->honeypotEventFlows[$n++] = null !== $item ? honeypotEventFlows::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
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
