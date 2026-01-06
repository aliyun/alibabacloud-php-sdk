<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryRobotUnsubscriptionResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

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

    /**
     * @var string[]
     */
    public $unsubscribedStaffIds;
    protected $_name = [
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
        'unsubscribedStaffIds' => 'unsubscribedStaffIds',
    ];

    public function validate()
    {
        if (\is_array($this->unsubscribedStaffIds)) {
            Model::validateArray($this->unsubscribedStaffIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->unsubscribedStaffIds) {
            if (\is_array($this->unsubscribedStaffIds)) {
                $res['unsubscribedStaffIds'] = [];
                $n1 = 0;
                foreach ($this->unsubscribedStaffIds as $item1) {
                    $res['unsubscribedStaffIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['unsubscribedStaffIds'])) {
            if (!empty($map['unsubscribedStaffIds'])) {
                $model->unsubscribedStaffIds = [];
                $n1 = 0;
                foreach ($map['unsubscribedStaffIds'] as $item1) {
                    $model->unsubscribedStaffIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
