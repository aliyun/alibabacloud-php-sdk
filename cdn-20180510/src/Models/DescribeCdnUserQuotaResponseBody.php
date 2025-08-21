<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeCdnUserQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $blockQuota;

    /**
     * @var int
     */
    public $blockRemain;

    /**
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
     * @var int
     */
    public $preloadQuota;

    /**
     * @var int
     */
    public $preloadRemain;

    /**
     * @var int
     */
    public $refreshDirQuota;

    /**
     * @var int
     */
    public $refreshDirRemain;

    /**
     * @var int
     */
    public $refreshUrlQuota;

    /**
     * @var int
     */
    public $refreshUrlRemain;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'blockQuota' => 'BlockQuota',
        'blockRemain' => 'BlockRemain',
        'domainQuota' => 'DomainQuota',
        'ignoreParamsQuota' => 'IgnoreParamsQuota',
        'ignoreParamsRemain' => 'IgnoreParamsRemain',
        'preloadQuota' => 'PreloadQuota',
        'preloadRemain' => 'PreloadRemain',
        'refreshDirQuota' => 'RefreshDirQuota',
        'refreshDirRemain' => 'RefreshDirRemain',
        'refreshUrlQuota' => 'RefreshUrlQuota',
        'refreshUrlRemain' => 'RefreshUrlRemain',
        'requestId' => 'RequestId',
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
