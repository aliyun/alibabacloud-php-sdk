<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserQuotaResponseBody extends Model
{
    /**
     * @description The maximum number of URLs that can be blocked.
     *
     * @example 20
     *
     * @var int
     */
    public $blockQuota;

    /**
     * @description The remaining number of URLs that can be blocked.
     *
     * @example 500
     *
     * @var int
     */
    public $blockRemain;

    /**
     * @description The maximum number of accelerated domains.
     *
     * @example 50
     *
     * @var int
     */
    public $domainQuota;

    /**
     * @var int
     */
    public $ignoreParamsQuota;

    /**
     * @var int
     */
    public $ignoreParamsRemain;

    /**
     * @description The maximum number of URLs that can be prefetched.
     *
     * @example 500
     *
     * @var int
     */
    public $preloadQuota;

    /**
     * @description The remaining number of URLs that can be prefetched.
     *
     * @example 300
     *
     * @var int
     */
    public $preloadRemain;

    /**
     * @description The maximum number of directories that can be refreshed.
     *
     * @example 100
     *
     * @var int
     */
    public $refreshDirQuota;

    /**
     * @description The remaining number of directories that can be refreshed.
     *
     * @example 100
     *
     * @var int
     */
    public $refreshDirRemain;

    /**
     * @description The maximum number of URLs that can be refreshed.
     *
     * @example 100
     *
     * @var int
     */
    public $refreshUrlQuota;

    /**
     * @description The remaining number of URLs that can be refreshed.
     *
     * @example 100
     *
     * @var int
     */
    public $refreshUrlRemain;

    /**
     * @description The ID of the request.
     *
     * @example BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'blockQuota'         => 'BlockQuota',
        'blockRemain'        => 'BlockRemain',
        'domainQuota'        => 'DomainQuota',
        'ignoreParamsQuota'  => 'IgnoreParamsQuota',
        'ignoreParamsRemain' => 'IgnoreParamsRemain',
        'preloadQuota'       => 'PreloadQuota',
        'preloadRemain'      => 'PreloadRemain',
        'refreshDirQuota'    => 'RefreshDirQuota',
        'refreshDirRemain'   => 'RefreshDirRemain',
        'refreshUrlQuota'    => 'RefreshUrlQuota',
        'refreshUrlRemain'   => 'RefreshUrlRemain',
        'requestId'          => 'RequestId',
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
        if (null !== $this->domainQuota) {
            $res['DomainQuota'] = $this->domainQuota;
        }
        if (null !== $this->ignoreParamsQuota) {
            $res['IgnoreParamsQuota'] = $this->ignoreParamsQuota;
        }
        if (null !== $this->ignoreParamsRemain) {
            $res['IgnoreParamsRemain'] = $this->ignoreParamsRemain;
        }
        if (null !== $this->preloadQuota) {
            $res['PreloadQuota'] = $this->preloadQuota;
        }
        if (null !== $this->preloadRemain) {
            $res['PreloadRemain'] = $this->preloadRemain;
        }
        if (null !== $this->refreshDirQuota) {
            $res['RefreshDirQuota'] = $this->refreshDirQuota;
        }
        if (null !== $this->refreshDirRemain) {
            $res['RefreshDirRemain'] = $this->refreshDirRemain;
        }
        if (null !== $this->refreshUrlQuota) {
            $res['RefreshUrlQuota'] = $this->refreshUrlQuota;
        }
        if (null !== $this->refreshUrlRemain) {
            $res['RefreshUrlRemain'] = $this->refreshUrlRemain;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserQuotaResponseBody
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
        if (isset($map['DomainQuota'])) {
            $model->domainQuota = $map['DomainQuota'];
        }
        if (isset($map['IgnoreParamsQuota'])) {
            $model->ignoreParamsQuota = $map['IgnoreParamsQuota'];
        }
        if (isset($map['IgnoreParamsRemain'])) {
            $model->ignoreParamsRemain = $map['IgnoreParamsRemain'];
        }
        if (isset($map['PreloadQuota'])) {
            $model->preloadQuota = $map['PreloadQuota'];
        }
        if (isset($map['PreloadRemain'])) {
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if (isset($map['RefreshDirQuota'])) {
            $model->refreshDirQuota = $map['RefreshDirQuota'];
        }
        if (isset($map['RefreshDirRemain'])) {
            $model->refreshDirRemain = $map['RefreshDirRemain'];
        }
        if (isset($map['RefreshUrlQuota'])) {
            $model->refreshUrlQuota = $map['RefreshUrlQuota'];
        }
        if (isset($map['RefreshUrlRemain'])) {
            $model->refreshUrlRemain = $map['RefreshUrlRemain'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
