<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightOrderListQueryV2Request extends Model
{
    /**
     * @var string[]
     */
    public $approveId;

    /**
     * @var string[]
     */
    public $bookerId;

    /**
     * @var string[]
     */
    public $departId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string[]
     */
    public $supplier;

    /**
     * @var string[]
     */
    public $thirdpartApproveId;

    /**
     * @var string
     */
    public $updateEndDate;

    /**
     * @var string
     */
    public $updateStartDate;
    protected $_name = [
        'approveId' => 'approve_id',
        'bookerId' => 'booker_id',
        'departId' => 'depart_id',
        'endDate' => 'end_date',
        'pageSize' => 'page_Size',
        'scrollId' => 'scroll_id',
        'startDate' => 'start_date',
        'supplier' => 'supplier',
        'thirdpartApproveId' => 'thirdpart_approve_id',
        'updateEndDate' => 'update_end_date',
        'updateStartDate' => 'update_start_date',
    ];

    public function validate()
    {
        if (\is_array($this->approveId)) {
            Model::validateArray($this->approveId);
        }
        if (\is_array($this->bookerId)) {
            Model::validateArray($this->bookerId);
        }
        if (\is_array($this->departId)) {
            Model::validateArray($this->departId);
        }
        if (\is_array($this->supplier)) {
            Model::validateArray($this->supplier);
        }
        if (\is_array($this->thirdpartApproveId)) {
            Model::validateArray($this->thirdpartApproveId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveId) {
            if (\is_array($this->approveId)) {
                $res['approve_id'] = [];
                $n1 = 0;
                foreach ($this->approveId as $item1) {
                    $res['approve_id'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bookerId) {
            if (\is_array($this->bookerId)) {
                $res['booker_id'] = [];
                $n1 = 0;
                foreach ($this->bookerId as $item1) {
                    $res['booker_id'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->departId) {
            if (\is_array($this->departId)) {
                $res['depart_id'] = [];
                $n1 = 0;
                foreach ($this->departId as $item1) {
                    $res['depart_id'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }

        if (null !== $this->pageSize) {
            $res['page_Size'] = $this->pageSize;
        }

        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }

        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }

        if (null !== $this->supplier) {
            if (\is_array($this->supplier)) {
                $res['supplier'] = [];
                $n1 = 0;
                foreach ($this->supplier as $item1) {
                    $res['supplier'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->thirdpartApproveId) {
            if (\is_array($this->thirdpartApproveId)) {
                $res['thirdpart_approve_id'] = [];
                $n1 = 0;
                foreach ($this->thirdpartApproveId as $item1) {
                    $res['thirdpart_approve_id'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->updateEndDate) {
            $res['update_end_date'] = $this->updateEndDate;
        }

        if (null !== $this->updateStartDate) {
            $res['update_start_date'] = $this->updateStartDate;
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
        if (isset($map['approve_id'])) {
            if (!empty($map['approve_id'])) {
                $model->approveId = [];
                $n1 = 0;
                foreach ($map['approve_id'] as $item1) {
                    $model->approveId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['booker_id'])) {
            if (!empty($map['booker_id'])) {
                $model->bookerId = [];
                $n1 = 0;
                foreach ($map['booker_id'] as $item1) {
                    $model->bookerId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['depart_id'])) {
            if (!empty($map['depart_id'])) {
                $model->departId = [];
                $n1 = 0;
                foreach ($map['depart_id'] as $item1) {
                    $model->departId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }

        if (isset($map['page_Size'])) {
            $model->pageSize = $map['page_Size'];
        }

        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }

        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }

        if (isset($map['supplier'])) {
            if (!empty($map['supplier'])) {
                $model->supplier = [];
                $n1 = 0;
                foreach ($map['supplier'] as $item1) {
                    $model->supplier[$n1++] = $item1;
                }
            }
        }

        if (isset($map['thirdpart_approve_id'])) {
            if (!empty($map['thirdpart_approve_id'])) {
                $model->thirdpartApproveId = [];
                $n1 = 0;
                foreach ($map['thirdpart_approve_id'] as $item1) {
                    $model->thirdpartApproveId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['update_end_date'])) {
            $model->updateEndDate = $map['update_end_date'];
        }

        if (isset($map['update_start_date'])) {
            $model->updateStartDate = $map['update_start_date'];
        }

        return $model;
    }
}
