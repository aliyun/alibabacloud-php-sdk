<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GeneralBillPageResult extends Model
{
    /**
     * @var GeneralBill[]
     */
    public $generalBills;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 24
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'generalBills' => 'generalBills',
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
        'requestId'    => 'requestId',
        'total'        => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generalBills) {
            $res['generalBills'] = [];
            if (null !== $this->generalBills && \is_array($this->generalBills)) {
                $n = 0;
                foreach ($this->generalBills as $item) {
                    $res['generalBills'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GeneralBillPageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generalBills'])) {
            if (!empty($map['generalBills'])) {
                $model->generalBills = [];
                $n                   = 0;
                foreach ($map['generalBills'] as $item) {
                    $model->generalBills[$n++] = null !== $item ? GeneralBill::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
