<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListWebhooksResponseBody\webhooks;
use AlibabaCloud\Tea\Model;

class ListWebhooksResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var webhooks[]
     */
    public $webhooks;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
        'webhooks'   => 'Webhooks',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = [];
            if (null !== $this->webhooks && \is_array($this->webhooks)) {
                $n = 0;
                foreach ($this->webhooks as $item) {
                    $res['Webhooks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebhooksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Webhooks'])) {
            if (!empty($map['Webhooks'])) {
                $model->webhooks = [];
                $n               = 0;
                foreach ($map['Webhooks'] as $item) {
                    $model->webhooks[$n++] = null !== $item ? webhooks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
