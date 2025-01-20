<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\images;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\videos;

class ListSearchTaskDialogueDatasResponseBody extends Model
{
    /**
     * @var articles[]
     */
    public $articles;
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var images[]
     */
    public $images;
    /**
     * @var string
     */
    public $message;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var bool
     */
    public $realtimeSearch;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $searchType;
    /**
     * @var bool
     */
    public $success;
    /**
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
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->videos)) {
            Model::validateArray($this->videos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articles) {
            if (\is_array($this->articles)) {
                $res['Articles'] = [];
                $n1              = 0;
                foreach ($this->articles as $item1) {
                    $res['Articles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1            = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->videos)) {
                $res['Videos'] = [];
                $n1            = 0;
                foreach ($this->videos as $item1) {
                    $res['Videos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n1              = 0;
                foreach ($map['Articles'] as $item1) {
                    $model->articles[$n1++] = articles::fromMap($item1);
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
                $n1            = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1++] = images::fromMap($item1);
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
                $n1            = 0;
                foreach ($map['Videos'] as $item1) {
                    $model->videos[$n1++] = videos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
