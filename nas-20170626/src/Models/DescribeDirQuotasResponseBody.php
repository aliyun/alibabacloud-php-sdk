<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos;
use AlibabaCloud\Tea\Model;

class DescribeDirQuotasResponseBody extends Model
{
    /**
     * @description The queried directory quotas.
     *
     * @var dirQuotaInfos[]
     */
    public $dirQuotaInfos;

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
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 5BC5CB97-9F28-42FE-84A4-0CD0DF42****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of directories.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dirQuotaInfos' => 'DirQuotaInfos',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dirQuotaInfos) {
            $res['DirQuotaInfos'] = [];
            if (null !== $this->dirQuotaInfos && \is_array($this->dirQuotaInfos)) {
                $n = 0;
                foreach ($this->dirQuotaInfos as $item) {
                    $res['DirQuotaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDirQuotasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirQuotaInfos'])) {
            if (!empty($map['DirQuotaInfos'])) {
                $model->dirQuotaInfos = [];
                $n                    = 0;
                foreach ($map['DirQuotaInfos'] as $item) {
                    $model->dirQuotaInfos[$n++] = null !== $item ? dirQuotaInfos::fromMap($item) : $item;
                }
            }
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
