<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxGeneralTaxpayerResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $department;

    /**
     * @example 2022-08-08
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 1999-01-01
     *
     * @var string
     */
    public $judgeDate;

    /**
     * @var string
     */
    public $qualification;

    /**
     * @example 2021-06-11
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 91120110328591094E
     *
     * @var string
     */
    public $taxpayerNum;
    protected $_name = [
        'department'    => 'Department',
        'endDate'       => 'EndDate',
        'entName'       => 'EntName',
        'judgeDate'     => 'JudgeDate',
        'qualification' => 'Qualification',
        'startDate'     => 'StartDate',
        'taxpayerNum'   => 'TaxpayerNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->judgeDate) {
            $res['JudgeDate'] = $this->judgeDate;
        }
        if (null !== $this->qualification) {
            $res['Qualification'] = $this->qualification;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->taxpayerNum) {
            $res['TaxpayerNum'] = $this->taxpayerNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['JudgeDate'])) {
            $model->judgeDate = $map['JudgeDate'];
        }
        if (isset($map['Qualification'])) {
            $model->qualification = $map['Qualification'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TaxpayerNum'])) {
            $model->taxpayerNum = $map['TaxpayerNum'];
        }

        return $model;
    }
}
