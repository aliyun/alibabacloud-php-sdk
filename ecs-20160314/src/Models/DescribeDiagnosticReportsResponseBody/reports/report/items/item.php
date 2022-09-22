<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\items;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\items\item\itemDatas;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $itemCategory;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var itemDatas
     */
    public $itemDatas;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'itemCategory'   => 'ItemCategory',
        'itemCode'       => 'ItemCode',
        'itemDatas'      => 'ItemDatas',
        'occurrenceTime' => 'OccurrenceTime',
        'severity'       => 'Severity',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemCategory) {
            $res['ItemCategory'] = $this->itemCategory;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }
        if (null !== $this->itemDatas) {
            $res['ItemDatas'] = null !== $this->itemDatas ? $this->itemDatas->toMap() : null;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemCategory'])) {
            $model->itemCategory = $map['ItemCategory'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }
        if (isset($map['ItemDatas'])) {
            $model->itemDatas = itemDatas::fromMap($map['ItemDatas']);
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
