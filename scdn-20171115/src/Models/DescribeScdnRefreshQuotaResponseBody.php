<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class DescribeScdnRefreshQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $blockQuota;

    /**
     * @var string
     */
    public $dirQuota;

    /**
     * @var string
     */
    public $dirRemain;

    /**
     * @var string
     */
    public $preloadQuota;

    /**
     * @var string
     */
    public $preloadRemain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $urlQuota;

    /**
     * @var string
     */
    public $urlRemain;

    /**
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
     * @return DescribeScdnRefreshQuotaResponseBody
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
