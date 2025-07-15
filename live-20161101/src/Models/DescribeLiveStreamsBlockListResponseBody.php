<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsBlockListResponseBody\streamUrls;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsBlockListResponseBody extends Model
{
    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The page number of the returned page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 9D855EC8-CF71-4615-B164-F7DFCB23B41D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The complete URL of each live stream.
     *
     * @var streamUrls
     */
    public $streamUrls;

    /**
     * @description The total number of live stream URLs that meet the specified conditions.
     *
     * @example 11
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of returned pages.
     *
     * @example 2
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'domainName' => 'DomainName',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'streamUrls' => 'StreamUrls',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamUrls) {
            $res['StreamUrls'] = null !== $this->streamUrls ? $this->streamUrls->toMap() : null;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsBlockListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamUrls'])) {
            $model->streamUrls = streamUrls::fromMap($map['StreamUrls']);
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
