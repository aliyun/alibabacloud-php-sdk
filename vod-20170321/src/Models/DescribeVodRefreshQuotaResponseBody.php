<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodRefreshQuotaResponseBody extends Model
{
    /**
     * @description The remaining number of directories of files that can be refreshed on the current day.
     *
     * @example 500
     *
     * @var string
     */
    public $blockQuota;

    /**
     * @description Queries the maximum number and remaining number of requests to refresh or prefetch files on the current day. You can prefetch files based on URLs and refresh files based on URLs or directories.
     *
     * @example 100
     *
     * @var string
     */
    public $dirQuota;

    /**
     * @description The ID of the request.
     *
     * @example 99
     *
     * @var string
     */
    public $dirRemain;

    /**
     * @example 500
     *
     * @var string
     */
    public $preloadQuota;

    /**
     * @description The remaining number of OSS buckets that can be refreshed on the current day.
     *
     * @example 500
     *
     * @var string
     */
    public $preloadRemain;

    /**
     * @description The maximum number of directories of files that can be refreshed each day.
     *
     * @example 42E0554B-80F4-4921-****-ACFB22CAAAD0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2000
     *
     * @var string
     */
    public $urlQuota;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeVodRefreshQuota**.
     *
     * @example 1996
     *
     * @var string
     */
    public $urlRemain;

    /**
     * @description The maximum number of URLs of files that can be prefetched each day.
     *
     * @example 500
     *
     * @var string
     */
    public $blockRemain;
    protected $_name = [
        'blockQuota'    => 'BlockQuota',
        'dirQuota'      => 'DirQuota',
        'dirRemain'     => 'DirRemain',
        'preloadQuota'  => 'PreloadQuota',
        'preloadRemain' => 'PreloadRemain',
        'requestId'     => 'RequestId',
        'urlQuota'      => 'UrlQuota',
        'urlRemain'     => 'UrlRemain',
        'blockRemain'   => 'blockRemain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockQuota) {
            $res['BlockQuota'] = $this->blockQuota;
        }
        if (null !== $this->dirQuota) {
            $res['DirQuota'] = $this->dirQuota;
        }
        if (null !== $this->dirRemain) {
            $res['DirRemain'] = $this->dirRemain;
        }
        if (null !== $this->preloadQuota) {
            $res['PreloadQuota'] = $this->preloadQuota;
        }
        if (null !== $this->preloadRemain) {
            $res['PreloadRemain'] = $this->preloadRemain;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->urlQuota) {
            $res['UrlQuota'] = $this->urlQuota;
        }
        if (null !== $this->urlRemain) {
            $res['UrlRemain'] = $this->urlRemain;
        }
        if (null !== $this->blockRemain) {
            $res['blockRemain'] = $this->blockRemain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodRefreshQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockQuota'])) {
            $model->blockQuota = $map['BlockQuota'];
        }
        if (isset($map['DirQuota'])) {
            $model->dirQuota = $map['DirQuota'];
        }
        if (isset($map['DirRemain'])) {
            $model->dirRemain = $map['DirRemain'];
        }
        if (isset($map['PreloadQuota'])) {
            $model->preloadQuota = $map['PreloadQuota'];
        }
        if (isset($map['PreloadRemain'])) {
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UrlQuota'])) {
            $model->urlQuota = $map['UrlQuota'];
        }
        if (isset($map['UrlRemain'])) {
            $model->urlRemain = $map['UrlRemain'];
        }
        if (isset($map['blockRemain'])) {
            $model->blockRemain = $map['blockRemain'];
        }

        return $model;
    }
}
