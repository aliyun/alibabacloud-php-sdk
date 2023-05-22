<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnHttpsDomainListResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnHttpsDomainListResponseBody extends Model
{
    /**
     * @description The time when the certificate became effective.
     *
     * @var certInfos
     */
    public $certInfos;

    /**
     * @description The returned primary domain name of the certificate.
     *
     * @example F5E8DF64-7175-4186-9B06-F002C0BBD0C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries to return on each page. Valid values: **1 to 500**. Default value: **20**.
     *
     * @example 16
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certInfos'  => 'CertInfos',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certInfos) {
            $res['CertInfos'] = null !== $this->certInfos ? $this->certInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnHttpsDomainListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertInfos'])) {
            $model->certInfos = certInfos::fromMap($map['CertInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
