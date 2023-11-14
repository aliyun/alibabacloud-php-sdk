<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody\honeypotEventFlows;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListHoneypotEventFlowsResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var honeypotEventFlows[]
     */
    public $honeypotEventFlows;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 9F4E6157-9600-5588-86B9-38F09067****
     *
     * @var string
     */
    public $requestId;

    /**
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
