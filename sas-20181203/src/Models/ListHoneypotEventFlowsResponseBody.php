<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody\honeypotEventFlows;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody\pageInfo;

class ListHoneypotEventFlowsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var honeypotEventFlows[]
     */
    public $honeypotEventFlows;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $message;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->honeypotEventFlows)) {
            Model::validateArray($this->honeypotEventFlows);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->honeypotEventFlows) {
            if (\is_array($this->honeypotEventFlows)) {
                $res['HoneypotEventFlows'] = [];
                $n1                        = 0;
                foreach ($this->honeypotEventFlows as $item1) {
                    $res['HoneypotEventFlows'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HoneypotEventFlows'])) {
            if (!empty($map['HoneypotEventFlows'])) {
                $model->honeypotEventFlows = [];
                $n1                        = 0;
                foreach ($map['HoneypotEventFlows'] as $item1) {
                    $model->honeypotEventFlows[$n1++] = honeypotEventFlows::fromMap($item1);
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
