<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeRefreshQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $blockRemain;

    /**
     * @var string
     */
    public $regexRemain;

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
    public $preloadQuota;

    /**
     * @var string
     */
    public $preloadEdgeQuota;

    /**
     * @var string
     */
    public $urlRemain;

    /**
     * @var string
     */
    public $preloadEdgeRemain;

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
    public $regexQuota;

    /**
     * @var string
     */
    public $dirQuota;
    protected $_name = [
        'requestId'         => 'RequestId',
        'blockRemain'       => 'BlockRemain',
        'regexRemain'       => 'RegexRemain',
        'dirRemain'         => 'DirRemain',
        'urlQuota'          => 'UrlQuota',
        'preloadQuota'      => 'PreloadQuota',
        'preloadEdgeQuota'  => 'PreloadEdgeQuota',
        'urlRemain'         => 'UrlRemain',
        'preloadEdgeRemain' => 'PreloadEdgeRemain',
        'preloadRemain'     => 'PreloadRemain',
        'blockQuota'        => 'BlockQuota',
        'regexQuota'        => 'RegexQuota',
        'dirQuota'          => 'DirQuota',
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
        if (null !== $this->blockRemain) {
            $res['BlockRemain'] = $this->blockRemain;
        }
        if (null !== $this->regexRemain) {
            $res['RegexRemain'] = $this->regexRemain;
        }
        if (null !== $this->dirRemain) {
            $res['DirRemain'] = $this->dirRemain;
        }
        if (null !== $this->urlQuota) {
            $res['UrlQuota'] = $this->urlQuota;
        }
        if (null !== $this->preloadQuota) {
            $res['PreloadQuota'] = $this->preloadQuota;
        }
        if (null !== $this->preloadEdgeQuota) {
            $res['PreloadEdgeQuota'] = $this->preloadEdgeQuota;
        }
        if (null !== $this->urlRemain) {
            $res['UrlRemain'] = $this->urlRemain;
        }
        if (null !== $this->preloadEdgeRemain) {
            $res['PreloadEdgeRemain'] = $this->preloadEdgeRemain;
        }
        if (null !== $this->preloadRemain) {
            $res['PreloadRemain'] = $this->preloadRemain;
        }
        if (null !== $this->blockQuota) {
            $res['BlockQuota'] = $this->blockQuota;
        }
        if (null !== $this->regexQuota) {
            $res['RegexQuota'] = $this->regexQuota;
        }
        if (null !== $this->dirQuota) {
            $res['DirQuota'] = $this->dirQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRefreshQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BlockRemain'])) {
            $model->blockRemain = $map['BlockRemain'];
        }
        if (isset($map['RegexRemain'])) {
            $model->regexRemain = $map['RegexRemain'];
        }
        if (isset($map['DirRemain'])) {
            $model->dirRemain = $map['DirRemain'];
        }
        if (isset($map['UrlQuota'])) {
            $model->urlQuota = $map['UrlQuota'];
        }
        if (isset($map['PreloadQuota'])) {
            $model->preloadQuota = $map['PreloadQuota'];
        }
        if (isset($map['PreloadEdgeQuota'])) {
            $model->preloadEdgeQuota = $map['PreloadEdgeQuota'];
        }
        if (isset($map['UrlRemain'])) {
            $model->urlRemain = $map['UrlRemain'];
        }
        if (isset($map['PreloadEdgeRemain'])) {
            $model->preloadEdgeRemain = $map['PreloadEdgeRemain'];
        }
        if (isset($map['PreloadRemain'])) {
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if (isset($map['BlockQuota'])) {
            $model->blockQuota = $map['BlockQuota'];
        }
        if (isset($map['RegexQuota'])) {
            $model->regexQuota = $map['RegexQuota'];
        }
        if (isset($map['DirQuota'])) {
            $model->dirQuota = $map['DirQuota'];
        }

        return $model;
    }
}
