<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDeletedDomainsResponseBody\domains;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDeletedDomainsResponseBody extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @var domains
     */
    public $domains;

    /**
     * @description The total number of domain names returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The list of accelerated domain names and the time each domain name was last modified.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of domain names returned per page, which is the same as the **PageSize** parameter in request parameters.
     *
     * @example AA75AADB-5E25-4970-B480-EAA1F5658483
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the accelerated domain name was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC+0.
     *
     * @example 16
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domains'    => 'Domains',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeDcdnDeletedDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
