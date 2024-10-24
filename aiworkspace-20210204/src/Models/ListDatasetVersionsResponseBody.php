<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetVersionsResponseBody extends Model
{
    /**
     * @var DatasetVersion[]
     */
    public $datasetVersions;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example ADF6D849-*****-7E7030F0CE53
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetVersions' => 'DatasetVersions',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
        'requestId'       => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetVersions) {
            $res['DatasetVersions'] = [];
            if (null !== $this->datasetVersions && \is_array($this->datasetVersions)) {
                $n = 0;
                foreach ($this->datasetVersions as $item) {
                    $res['DatasetVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasetVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetVersions'])) {
            if (!empty($map['DatasetVersions'])) {
                $model->datasetVersions = [];
                $n                      = 0;
                foreach ($map['DatasetVersions'] as $item) {
                    $model->datasetVersions[$n++] = null !== $item ? DatasetVersion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
