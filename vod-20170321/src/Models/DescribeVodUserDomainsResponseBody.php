<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains;
use AlibabaCloud\Tea\Model;

class DescribeVodUserDomainsResponseBody extends Model
{
    /**
     * @description The status of the domain name. The value of this parameter is used as a condition to filter domain names. Value values:
     *
     *   **online**: indicates that the domain name is enabled.
     *   **offline**: indicates that the domain name is disabled.
     *   **configuring**: indicates that the domain name is being configured.
     *   **configure_failed**: indicates that the domain name failed to be configured.
     *   **checking**: indicates that the domain name is under review.
     *   **check_failed**: indicates that the domain name failed the review.
     *
     * @var domains
     */
    public $domains;

    /**
     * @description The domain name. The value of this parameter is used as a filter condition for a fuzzy match.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The time when the domain name for CDN was added. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return.
     *
     * @example E4EBD2BF-5EB0-4476-****-9D94E1B15267
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether HTTPS is enabled.
     *
     * - **on**: indicates that HTTPS is enabled.
     * - **off**: indicates that HTTPS is disabled.
     * @example 2
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
     * @return DescribeVodUserDomainsResponseBody
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
