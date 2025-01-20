<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos;

class DescribeDirQuotasResponseBody extends Model
{
    /**
     * @var dirQuotaInfos[]
     */
    public $dirQuotaInfos;
    /**
     * @var int
     */
    public $pageNumber;
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
        if (\is_array($this->dirQuotaInfos)) {
            Model::validateArray($this->dirQuotaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dirQuotaInfos) {
            if (\is_array($this->dirQuotaInfos)) {
                $res['DirQuotaInfos'] = [];
                $n1                   = 0;
                foreach ($this->dirQuotaInfos as $item1) {
                    $res['DirQuotaInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirQuotaInfos'])) {
            if (!empty($map['DirQuotaInfos'])) {
                $model->dirQuotaInfos = [];
                $n1                   = 0;
                foreach ($map['DirQuotaInfos'] as $item1) {
                    $model->dirQuotaInfos[$n1++] = dirQuotaInfos::fromMap($item1);
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
