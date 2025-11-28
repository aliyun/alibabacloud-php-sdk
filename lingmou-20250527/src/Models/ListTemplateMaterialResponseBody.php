<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListTemplateMaterialResponseBody\data;

class ListTemplateMaterialResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var data[]
     */
    public $data;

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
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'httpStatusCode' => 'httpStatusCode',
        'maxResults' => 'maxResults',
        'message' => 'message',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'requestId' => 'requestId',
        'size' => 'size',
        'success' => 'success',
        'total' => 'total',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
