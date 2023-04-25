<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeCdnHttpsDomainListResponseBody extends Model
{
    /**
     * @description The information about the certificate.
     *
     * @var certInfos
     */
    public $certInfos;

    /**
     * @description The ID of the request.
     *
     * @example F5E8DF64-7175-4186-9B06-F002C0BBD0C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
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
     * @return DescribeCdnHttpsDomainListResponseBody
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
