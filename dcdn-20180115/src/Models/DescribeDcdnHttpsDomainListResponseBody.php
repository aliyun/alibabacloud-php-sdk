<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnHttpsDomainListResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnHttpsDomainListResponseBody extends Model
{
    /**
     * @var certInfos
     */
    public $certInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
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
