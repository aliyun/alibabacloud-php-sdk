<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\images;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\videos;
use AlibabaCloud\Tea\Model;

class ListSearchTaskDialogueDatasResponseBody extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @example NoData
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $realtimeSearch;

    /**
     * @example 1813ceee-7fe5-41b4-87e5-982a4d18cca5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example realtime
     *
     * @var string
     */
    public $searchType;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var videos[]
     */
    public $videos;
    protected $_name = [
        'articles'       => 'Articles',
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'images'         => 'Images',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'realtimeSearch' => 'RealtimeSearch',
        'requestId'      => 'RequestId',
        'searchType'     => 'SearchType',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
        'videos'         => 'Videos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->realtimeSearch) {
            $res['RealtimeSearch'] = $this->realtimeSearch;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->videos) {
            $res['Videos'] = [];
            if (null !== $this->videos && \is_array($this->videos)) {
                $n = 0;
                foreach ($this->videos as $item) {
                    $res['Videos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchTaskDialogueDatasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n               = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RealtimeSearch'])) {
            $model->realtimeSearch = $map['RealtimeSearch'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Videos'])) {
            if (!empty($map['Videos'])) {
                $model->videos = [];
                $n             = 0;
                foreach ($map['Videos'] as $item) {
                    $model->videos[$n++] = null !== $item ? videos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
