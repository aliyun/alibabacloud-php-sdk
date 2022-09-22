<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosisOperateRecordsResponseBody\diagnosisOperateRecordModels;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisOperateRecordsResponseBody extends Model
{
    /**
     * @var diagnosisOperateRecordModels[]
     */
    public $diagnosisOperateRecordModels;

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
        'diagnosisOperateRecordModels' => 'DiagnosisOperateRecordModels',
        'pageNumber'                   => 'PageNumber',
        'pageSize'                     => 'PageSize',
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosisOperateRecordModels) {
            $res['DiagnosisOperateRecordModels'] = [];
            if (null !== $this->diagnosisOperateRecordModels && \is_array($this->diagnosisOperateRecordModels)) {
                $n = 0;
                foreach ($this->diagnosisOperateRecordModels as $item) {
                    $res['DiagnosisOperateRecordModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDiagnosisOperateRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosisOperateRecordModels'])) {
            if (!empty($map['DiagnosisOperateRecordModels'])) {
                $model->diagnosisOperateRecordModels = [];
                $n                                   = 0;
                foreach ($map['DiagnosisOperateRecordModels'] as $item) {
                    $model->diagnosisOperateRecordModels[$n++] = null !== $item ? diagnosisOperateRecordModels::fromMap($item) : $item;
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
