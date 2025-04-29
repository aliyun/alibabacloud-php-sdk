<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\occupantInfoList;

use AlibabaCloud\Dara\Model;

class costCenterInfoList extends Model
{
    /**
     * @var string
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $costCenterNo;

    /**
     * @var int
     */
    public $costCenterPrices;

    /**
     * @var int
     */
    public $costCenterRatios;

    /**
     * @var string
     */
    public $costCenterSubjectCode;

    /**
     * @var string
     */
    public $costCenterSubjectName;

    /**
     * @var string
     */
    public $settleSubjectId;

    /**
     * @var string
     */
    public $settleSubjectName;

    /**
     * @var string
     */
    public $settleSubjectNo;
    protected $_name = [
        'costCenterId' => 'cost_center_id',
        'costCenterName' => 'cost_center_name',
        'costCenterNo' => 'cost_center_no',
        'costCenterPrices' => 'cost_center_prices',
        'costCenterRatios' => 'cost_center_ratios',
        'costCenterSubjectCode' => 'cost_center_subject_code',
        'costCenterSubjectName' => 'cost_center_subject_name',
        'settleSubjectId' => 'settle_subject_id',
        'settleSubjectName' => 'settle_subject_name',
        'settleSubjectNo' => 'settle_subject_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }

        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }

        if (null !== $this->costCenterNo) {
            $res['cost_center_no'] = $this->costCenterNo;
        }

        if (null !== $this->costCenterPrices) {
            $res['cost_center_prices'] = $this->costCenterPrices;
        }

        if (null !== $this->costCenterRatios) {
            $res['cost_center_ratios'] = $this->costCenterRatios;
        }

        if (null !== $this->costCenterSubjectCode) {
            $res['cost_center_subject_code'] = $this->costCenterSubjectCode;
        }

        if (null !== $this->costCenterSubjectName) {
            $res['cost_center_subject_name'] = $this->costCenterSubjectName;
        }

        if (null !== $this->settleSubjectId) {
            $res['settle_subject_id'] = $this->settleSubjectId;
        }

        if (null !== $this->settleSubjectName) {
            $res['settle_subject_name'] = $this->settleSubjectName;
        }

        if (null !== $this->settleSubjectNo) {
            $res['settle_subject_no'] = $this->settleSubjectNo;
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
        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }

        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }

        if (isset($map['cost_center_no'])) {
            $model->costCenterNo = $map['cost_center_no'];
        }

        if (isset($map['cost_center_prices'])) {
            $model->costCenterPrices = $map['cost_center_prices'];
        }

        if (isset($map['cost_center_ratios'])) {
            $model->costCenterRatios = $map['cost_center_ratios'];
        }

        if (isset($map['cost_center_subject_code'])) {
            $model->costCenterSubjectCode = $map['cost_center_subject_code'];
        }

        if (isset($map['cost_center_subject_name'])) {
            $model->costCenterSubjectName = $map['cost_center_subject_name'];
        }

        if (isset($map['settle_subject_id'])) {
            $model->settleSubjectId = $map['settle_subject_id'];
        }

        if (isset($map['settle_subject_name'])) {
            $model->settleSubjectName = $map['settle_subject_name'];
        }

        if (isset($map['settle_subject_no'])) {
            $model->settleSubjectNo = $map['settle_subject_no'];
        }

        return $model;
    }
}
