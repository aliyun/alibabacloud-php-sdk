<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnUserQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $blockQuota;

    /**
     * @var int
     */
    public $refreshUrlRemain;

    /**
     * @var int
     */
    public $domainQuota;

    /**
     * @var int
     */
    public $blockRemain;

    /**
     * @var int
     */
    public $preloadRemain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $refreshUrlQuota;

    /**
     * @var int
     */
    public $preloadQuota;

    /**
     * @var int
     */
    public $refreshDirQuota;

    /**
     * @var int
     */
    public $refreshDirRemain;
    protected $_name = [
        'blockQuota'       => 'BlockQuota',
        'refreshUrlRemain' => 'RefreshUrlRemain',
        'domainQuota'      => 'DomainQuota',
        'blockRemain'      => 'BlockRemain',
        'preloadRemain'    => 'PreloadRemain',
        'requestId'        => 'RequestId',
        'refreshUrlQuota'  => 'RefreshUrlQuota',
        'preloadQuota'     => 'PreloadQuota',
        'refreshDirQuota'  => 'RefreshDirQuota',
        'refreshDirRemain' => 'RefreshDirRemain',
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
        if (null !== $this->refreshUrlRemain) {
            $res['RefreshUrlRemain'] = $this->refreshUrlRemain;
        }
        if (null !== $this->domainQuota) {
            $res['DomainQuota'] = $this->domainQuota;
        }
        if (null !== $this->blockRemain) {
            $res['BlockRemain'] = $this->blockRemain;
        }
        if (null !== $this->preloadRemain) {
            $res['PreloadRemain'] = $this->preloadRemain;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->refreshUrlQuota) {
            $res['RefreshUrlQuota'] = $this->refreshUrlQuota;
        }
        if (null !== $this->preloadQuota) {
            $res['PreloadQuota'] = $this->preloadQuota;
        }
        if (null !== $this->refreshDirQuota) {
            $res['RefreshDirQuota'] = $this->refreshDirQuota;
        }
        if (null !== $this->refreshDirRemain) {
            $res['RefreshDirRemain'] = $this->refreshDirRemain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnUserQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockQuota'])) {
            $model->blockQuota = $map['BlockQuota'];
        }
        if (isset($map['RefreshUrlRemain'])) {
            $model->refreshUrlRemain = $map['RefreshUrlRemain'];
        }
        if (isset($map['DomainQuota'])) {
            $model->domainQuota = $map['DomainQuota'];
        }
        if (isset($map['BlockRemain'])) {
            $model->blockRemain = $map['BlockRemain'];
        }
        if (isset($map['PreloadRemain'])) {
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RefreshUrlQuota'])) {
            $model->refreshUrlQuota = $map['RefreshUrlQuota'];
        }
        if (isset($map['PreloadQuota'])) {
            $model->preloadQuota = $map['PreloadQuota'];
        }
        if (isset($map['RefreshDirQuota'])) {
            $model->refreshDirQuota = $map['RefreshDirQuota'];
        }
        if (isset($map['RefreshDirRemain'])) {
            $model->refreshDirRemain = $map['RefreshDirRemain'];
        }

        return $model;
    }
}
