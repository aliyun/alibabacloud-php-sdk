<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelResponseBody\data;

use AlibabaCloud\Dara\Model;

class customerLabel extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $endTimeStr;

    /**
     * @var string
     */
    public $gmtCreatedStr;

    /**
     * @var string
     */
    public $gmtModifiedStr;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $labelSeries;

    /**
     * @var string
     */
    public $startTimeStr;
    protected $_name = [
        'creator' => 'Creator',
        'endTimeStr' => 'EndTimeStr',
        'gmtCreatedStr' => 'GmtCreatedStr',
        'gmtModifiedStr' => 'GmtModifiedStr',
        'id' => 'Id',
        'label' => 'Label',
        'labelSeries' => 'LabelSeries',
        'startTimeStr' => 'StartTimeStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->endTimeStr) {
            $res['EndTimeStr'] = $this->endTimeStr;
        }

        if (null !== $this->gmtCreatedStr) {
            $res['GmtCreatedStr'] = $this->gmtCreatedStr;
        }

        if (null !== $this->gmtModifiedStr) {
            $res['GmtModifiedStr'] = $this->gmtModifiedStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->labelSeries) {
            $res['LabelSeries'] = $this->labelSeries;
        }

        if (null !== $this->startTimeStr) {
            $res['StartTimeStr'] = $this->startTimeStr;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['EndTimeStr'])) {
            $model->endTimeStr = $map['EndTimeStr'];
        }

        if (isset($map['GmtCreatedStr'])) {
            $model->gmtCreatedStr = $map['GmtCreatedStr'];
        }

        if (isset($map['GmtModifiedStr'])) {
            $model->gmtModifiedStr = $map['GmtModifiedStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['LabelSeries'])) {
            $model->labelSeries = $map['LabelSeries'];
        }

        if (isset($map['StartTimeStr'])) {
            $model->startTimeStr = $map['StartTimeStr'];
        }

        return $model;
    }
}
