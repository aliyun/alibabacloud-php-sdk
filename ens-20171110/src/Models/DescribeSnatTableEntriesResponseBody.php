<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeSnatTableEntriesResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the SNAT entries.
     *
     * @var snatTableEntries[]
     */
    public $snatTableEntries;

    /**
     * @description The number of SNAT entries that are returned.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'snatTableEntries' => 'SnatTableEntries',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snatTableEntries) {
            $res['SnatTableEntries'] = [];
            if (null !== $this->snatTableEntries && \is_array($this->snatTableEntries)) {
                $n = 0;
                foreach ($this->snatTableEntries as $item) {
                    $res['SnatTableEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnatTableEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnatTableEntries'])) {
            if (!empty($map['SnatTableEntries'])) {
                $model->snatTableEntries = [];
                $n                       = 0;
                foreach ($map['SnatTableEntries'] as $item) {
                    $model->snatTableEntries[$n++] = null !== $item ? snatTableEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
