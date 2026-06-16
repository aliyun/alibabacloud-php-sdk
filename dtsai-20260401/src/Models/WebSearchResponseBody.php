<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\WebSearchResponseBody\searchResult;

class WebSearchResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var searchResult[]
     */
    public $searchResult;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalResults;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'query' => 'Query',
        'requestId' => 'RequestId',
        'searchResult' => 'SearchResult',
        'success' => 'Success',
        'totalResults' => 'TotalResults',
    ];

    public function validate()
    {
        if (\is_array($this->searchResult)) {
            Model::validateArray($this->searchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchResult) {
            if (\is_array($this->searchResult)) {
                $res['SearchResult'] = [];
                $n1 = 0;
                foreach ($this->searchResult as $item1) {
                    $res['SearchResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalResults) {
            $res['TotalResults'] = $this->totalResults;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n1 = 0;
                foreach ($map['SearchResult'] as $item1) {
                    $model->searchResult[$n1] = searchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalResults'])) {
            $model->totalResults = $map['TotalResults'];
        }

        return $model;
    }
}
