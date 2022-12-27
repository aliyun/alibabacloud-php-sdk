<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnRefreshQuotaResponseBody extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $blockQuota;

    /**
     * @example 100
     *
     * @var string
     */
    public $blockRemain;

    /**
     * @example 100
     *
     * @var string
     */
    public $dirQuota;

    /**
     * @example 100
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
     * @example 500
     *
     * @var string
     */
    public $preloadRemain;

    /**
     * @example 100
     *
     * @var string
     */
    public $regexQuota;

    /**
     * @example 100
     *
     * @var string
     */
    public $regexRemain;

    /**
     * @example 42E0554B-80F4-4921-AED6-ACFB22CAAAD0
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
     * @example 2000
     *
     * @var string
     */
    public $urlRemain;
    protected $_name = [
        'blockQuota'    => 'BlockQuota',
        'blockRemain'   => 'BlockRemain',
        'dirQuota'      => 'DirQuota',
        'dirRemain'     => 'DirRemain',
        'preloadQuota'  => 'PreloadQuota',
        'preloadRemain' => 'PreloadRemain',
        'regexQuota'    => 'RegexQuota',
        'regexRemain'   => 'RegexRemain',
        'requestId'     => 'RequestId',
        'urlQuota'      => 'UrlQuota',
        'urlRemain'     => 'UrlRemain',
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
        if (null !== $this->blockRemain) {
            $res['BlockRemain'] = $this->blockRemain;
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
        if (null !== $this->regexQuota) {
            $res['RegexQuota'] = $this->regexQuota;
        }
        if (null !== $this->regexRemain) {
            $res['RegexRemain'] = $this->regexRemain;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnRefreshQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockQuota'])) {
            $model->blockQuota = $map['BlockQuota'];
        }
        if (isset($map['BlockRemain'])) {
            $model->blockRemain = $map['BlockRemain'];
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
        if (isset($map['RegexQuota'])) {
            $model->regexQuota = $map['RegexQuota'];
        }
        if (isset($map['RegexRemain'])) {
            $model->regexRemain = $map['RegexRemain'];
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

        return $model;
    }
}
