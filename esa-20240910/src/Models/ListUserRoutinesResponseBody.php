<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRoutinesResponseBody\routines;

class ListUserRoutinesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $quotaRoutineNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var routines[]
     */
    public $routines;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $usedRoutineNumber;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'quotaRoutineNumber' => 'QuotaRoutineNumber',
        'requestId' => 'RequestId',
        'routines' => 'Routines',
        'totalCount' => 'TotalCount',
        'usedRoutineNumber' => 'UsedRoutineNumber',
    ];

    public function validate()
    {
        if (\is_array($this->routines)) {
            Model::validateArray($this->routines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->quotaRoutineNumber) {
            $res['QuotaRoutineNumber'] = $this->quotaRoutineNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routines) {
            if (\is_array($this->routines)) {
                $res['Routines'] = [];
                $n1 = 0;
                foreach ($this->routines as $item1) {
                    $res['Routines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->usedRoutineNumber) {
            $res['UsedRoutineNumber'] = $this->usedRoutineNumber;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QuotaRoutineNumber'])) {
            $model->quotaRoutineNumber = $map['QuotaRoutineNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Routines'])) {
            if (!empty($map['Routines'])) {
                $model->routines = [];
                $n1 = 0;
                foreach ($map['Routines'] as $item1) {
                    $model->routines[$n1++] = routines::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UsedRoutineNumber'])) {
            $model->usedRoutineNumber = $map['UsedRoutineNumber'];
        }

        return $model;
    }
}
