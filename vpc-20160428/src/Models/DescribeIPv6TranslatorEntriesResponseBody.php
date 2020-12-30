<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponseBody\ipv6TranslatorEntries;
use AlibabaCloud\Tea\Model;

class DescribeIPv6TranslatorEntriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var ipv6TranslatorEntries
     */
    public $ipv6TranslatorEntries;
    protected $_name = [
        'totalCount'            => 'TotalCount',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'pageNumber'            => 'PageNumber',
        'ipv6TranslatorEntries' => 'Ipv6TranslatorEntries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->ipv6TranslatorEntries) {
            $res['Ipv6TranslatorEntries'] = null !== $this->ipv6TranslatorEntries ? $this->ipv6TranslatorEntries->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIPv6TranslatorEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Ipv6TranslatorEntries'])) {
            $model->ipv6TranslatorEntries = ipv6TranslatorEntries::fromMap($map['Ipv6TranslatorEntries']);
        }

        return $model;
    }
}
