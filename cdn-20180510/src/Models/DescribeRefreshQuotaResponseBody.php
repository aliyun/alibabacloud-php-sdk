<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeRefreshQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $blockQuota;

    /**
     * @var string
     */
    public $blockRemain;

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
    public $ignoreParamsQuota;

    /**
     * @var string
     */
    public $ignoreParamsRemain;

    /**
     * @var string
     */
    public $preloadEdgeQuota;

    /**
     * @var string
     */
    public $preloadEdgeRemain;

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
    public $regexQuota;

    /**
     * @var string
     */
    public $regexRemain;

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
    protected $_name = [
        'blockQuota' => 'BlockQuota',
        'blockRemain' => 'BlockRemain',
        'dirQuota' => 'DirQuota',
        'dirRemain' => 'DirRemain',
        'ignoreParamsQuota' => 'IgnoreParamsQuota',
        'ignoreParamsRemain' => 'IgnoreParamsRemain',
        'preloadEdgeQuota' => 'PreloadEdgeQuota',
        'preloadEdgeRemain' => 'PreloadEdgeRemain',
        'preloadQuota' => 'PreloadQuota',
        'preloadRemain' => 'PreloadRemain',
        'regexQuota' => 'RegexQuota',
        'regexRemain' => 'RegexRemain',
        'requestId' => 'RequestId',
        'urlQuota' => 'UrlQuota',
        'urlRemain' => 'UrlRemain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ignoreParamsQuota) {
            $res['IgnoreParamsQuota'] = $this->ignoreParamsQuota;
        }

        if (null !== $this->ignoreParamsRemain) {
            $res['IgnoreParamsRemain'] = $this->ignoreParamsRemain;
        }

        if (null !== $this->preloadEdgeQuota) {
            $res['PreloadEdgeQuota'] = $this->preloadEdgeQuota;
        }

        if (null !== $this->preloadEdgeRemain) {
            $res['PreloadEdgeRemain'] = $this->preloadEdgeRemain;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['IgnoreParamsQuota'])) {
            $model->ignoreParamsQuota = $map['IgnoreParamsQuota'];
        }

        if (isset($map['IgnoreParamsRemain'])) {
            $model->ignoreParamsRemain = $map['IgnoreParamsRemain'];
        }

        if (isset($map['PreloadEdgeQuota'])) {
            $model->preloadEdgeQuota = $map['PreloadEdgeQuota'];
        }

        if (isset($map['PreloadEdgeRemain'])) {
            $model->preloadEdgeRemain = $map['PreloadEdgeRemain'];
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
