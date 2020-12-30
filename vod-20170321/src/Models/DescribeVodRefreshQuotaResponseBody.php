<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodRefreshQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $urlRemain;

    /**
     * @var string
     */
    public $preloadRemain;

    /**
     * @var string
     */
    public $blockQuota;

    /**
     * @var string
     */
    public $dirRemain;

    /**
     * @var string
     */
    public $urlQuota;

    /**
     * @var string
     */
    public $dirQuota;

    /**
     * @var string
     */
    public $blockRemain;

    /**
     * @var string
     */
    public $preloadQuota;
    protected $_name = [
        'requestId'     => 'RequestId',
        'urlRemain'     => 'UrlRemain',
        'preloadRemain' => 'PreloadRemain',
        'blockQuota'    => 'BlockQuota',
        'dirRemain'     => 'DirRemain',
        'urlQuota'      => 'UrlQuota',
        'dirQuota'      => 'DirQuota',
        'blockRemain'   => 'blockRemain',
        'preloadQuota'  => 'PreloadQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->urlRemain) {
            $res['UrlRemain'] = $this->urlRemain;
        }
        if (null !== $this->preloadRemain) {
            $res['PreloadRemain'] = $this->preloadRemain;
        }
        if (null !== $this->blockQuota) {
            $res['BlockQuota'] = $this->blockQuota;
        }
        if (null !== $this->dirRemain) {
            $res['DirRemain'] = $this->dirRemain;
        }
        if (null !== $this->urlQuota) {
            $res['UrlQuota'] = $this->urlQuota;
        }
        if (null !== $this->dirQuota) {
            $res['DirQuota'] = $this->dirQuota;
        }
        if (null !== $this->blockRemain) {
            $res['blockRemain'] = $this->blockRemain;
        }
        if (null !== $this->preloadQuota) {
            $res['PreloadQuota'] = $this->preloadQuota;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UrlRemain'])) {
            $model->urlRemain = $map['UrlRemain'];
        }
        if (isset($map['PreloadRemain'])) {
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if (isset($map['BlockQuota'])) {
            $model->blockQuota = $map['BlockQuota'];
        }
        if (isset($map['DirRemain'])) {
            $model->dirRemain = $map['DirRemain'];
        }
        if (isset($map['UrlQuota'])) {
            $model->urlQuota = $map['UrlQuota'];
        }
        if (isset($map['DirQuota'])) {
            $model->dirQuota = $map['DirQuota'];
        }
        if (isset($map['blockRemain'])) {
            $model->blockRemain = $map['blockRemain'];
        }
        if (isset($map['PreloadQuota'])) {
            $model->preloadQuota = $map['PreloadQuota'];
        }

        return $model;
    }
}
