<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponseBody\module\monthAccountBillDetail;

class module extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var monthAccountBillDetail
     */
    public $monthAccountBillDetail;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'endDate' => 'end_date',
        'monthAccountBillDetail' => 'monthAccountBillDetail',
        'startDate' => 'start_date',
        'url' => 'url',
    ];

    public function validate()
    {
        if (null !== $this->monthAccountBillDetail) {
            $this->monthAccountBillDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }

        if (null !== $this->monthAccountBillDetail) {
            $res['monthAccountBillDetail'] = null !== $this->monthAccountBillDetail ? $this->monthAccountBillDetail->toArray($noStream) : $this->monthAccountBillDetail;
        }

        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }

        if (isset($map['monthAccountBillDetail'])) {
            $model->monthAccountBillDetail = monthAccountBillDetail::fromMap($map['monthAccountBillDetail']);
        }

        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
