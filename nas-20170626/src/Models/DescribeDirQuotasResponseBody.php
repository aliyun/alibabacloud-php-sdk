<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos;
use AlibabaCloud\Tea\Model;

class DescribeDirQuotasResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var dirQuotaInfos[]
     */
    public $dirQuotaInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'dirQuotaInfos' => 'DirQuotaInfos',
        'requestId'     => 'RequestId',
        'pageSize'      => 'PageSize',
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
        if (null !== $this->dirQuotaInfos) {
            $res['DirQuotaInfos'] = [];
            if (null !== $this->dirQuotaInfos && \is_array($this->dirQuotaInfos)) {
                $n = 0;
                foreach ($this->dirQuotaInfos as $item) {
                    $res['DirQuotaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DirQuotaInfos'])) {
            if (!empty($map['DirQuotaInfos'])) {
                $model->dirQuotaInfos = [];
                $n                    = 0;
                foreach ($map['DirQuotaInfos'] as $item) {
                    $model->dirQuotaInfos[$n++] = null !== $item ? dirQuotaInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
