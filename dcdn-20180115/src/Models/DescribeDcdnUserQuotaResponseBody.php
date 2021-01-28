<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserQuotaResponseBody extends Model
{
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
    public $blockRemain;

    /**
     * @var int
     */
    public $preloadRemain;

    /**
     * @var int
     */
    public $refreshDirRemain;

    /**
     * @var int
     */
    public $blockQuota;

    /**
     * @var int
     */
    public $refreshDirQuota;

    /**
     * @var int
     */
    public $domainQuota;

    /**
     * @var int
     */
    public $refreshUrlRemain;

    /**
     * @var int
     */
    public $preloadQuota;
    protected $_name = [
        'requestId'        => 'RequestId',
        'refreshUrlQuota'  => 'RefreshUrlQuota',
        'blockRemain'      => 'BlockRemain',
        'preloadRemain'    => 'PreloadRemain',
        'refreshDirRemain' => 'RefreshDirRemain',
        'blockQuota'       => 'BlockQuota',
        'refreshDirQuota'  => 'RefreshDirQuota',
        'domainQuota'      => 'DomainQuota',
        'refreshUrlRemain' => 'RefreshUrlRemain',
        'preloadQuota'     => 'PreloadQuota',
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
        if (null !== $this->refreshUrlQuota) {
            $res['RefreshUrlQuota'] = $this->refreshUrlQuota;
        }
        if (null !== $this->blockRemain) {
            $res['BlockRemain'] = $this->blockRemain;
        }
        if (null !== $this->preloadRemain) {
            $res['PreloadRemain'] = $this->preloadRemain;
        }
        if (null !== $this->refreshDirRemain) {
            $res['RefreshDirRemain'] = $this->refreshDirRemain;
        }
        if (null !== $this->blockQuota) {
            $res['BlockQuota'] = $this->blockQuota;
        }
        if (null !== $this->refreshDirQuota) {
            $res['RefreshDirQuota'] = $this->refreshDirQuota;
        }
        if (null !== $this->domainQuota) {
            $res['DomainQuota'] = $this->domainQuota;
        }
        if (null !== $this->refreshUrlRemain) {
            $res['RefreshUrlRemain'] = $this->refreshUrlRemain;
        }
        if (null !== $this->preloadQuota) {
            $res['PreloadQuota'] = $this->preloadQuota;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RefreshUrlQuota'])) {
            $model->refreshUrlQuota = $map['RefreshUrlQuota'];
        }
        if (isset($map['BlockRemain'])) {
            $model->blockRemain = $map['BlockRemain'];
        }
        if (isset($map['PreloadRemain'])) {
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if (isset($map['RefreshDirRemain'])) {
            $model->refreshDirRemain = $map['RefreshDirRemain'];
        }
        if (isset($map['BlockQuota'])) {
            $model->blockQuota = $map['BlockQuota'];
        }
        if (isset($map['RefreshDirQuota'])) {
            $model->refreshDirQuota = $map['RefreshDirQuota'];
        }
        if (isset($map['DomainQuota'])) {
            $model->domainQuota = $map['DomainQuota'];
        }
        if (isset($map['RefreshUrlRemain'])) {
            $model->refreshUrlRemain = $map['RefreshUrlRemain'];
        }
        if (isset($map['PreloadQuota'])) {
            $model->preloadQuota = $map['PreloadQuota'];
        }

        return $model;
    }
}
