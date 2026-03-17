<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\ListApiKeysResponseBody\apiKeys;

class ListApiKeysResponseBody extends Model
{
    /**
     * @var apiKeys[]
     */
    public $apiKeys;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
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
    protected $_name = [
        'apiKeys' => 'apiKeys',
        'code' => 'code',
        'httpStatusCode' => 'httpStatusCode',
        'maxResults' => 'maxResults',
        'message' => 'message',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'success' => 'success',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1] = apiKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
