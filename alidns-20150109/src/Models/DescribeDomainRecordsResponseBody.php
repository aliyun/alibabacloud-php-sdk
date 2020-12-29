<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponseBody\domainRecords;
use AlibabaCloud\Tea\Model;

class DescribeDomainRecordsResponseBody extends Model
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
     * @var domainRecords[]
     */
    public $domainRecords;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'domainRecords' => 'DomainRecords',
        'pageNumber'    => 'PageNumber',
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
        if (null !== $this->domainRecords) {
            $res['DomainRecords'] = [];
            if (null !== $this->domainRecords && \is_array($this->domainRecords)) {
                $n = 0;
                foreach ($this->domainRecords as $item) {
                    $res['DomainRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRecordsResponseBody
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
        if (isset($map['DomainRecords'])) {
            if (!empty($map['DomainRecords'])) {
                $model->domainRecords = [];
                $n                    = 0;
                foreach ($map['DomainRecords'] as $item) {
                    $model->domainRecords[$n++] = null !== $item ? domainRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
