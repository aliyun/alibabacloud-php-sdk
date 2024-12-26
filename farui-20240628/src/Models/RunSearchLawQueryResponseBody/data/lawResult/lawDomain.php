<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\lawResult;

use AlibabaCloud\Tea\Model;

class lawDomain extends Model
{
    /**
     * @var string
     */
    public $abolitionBasis;

    /**
     * @var string
     */
    public $implementYearMonthDate;

    /**
     * @example null
     *
     * @var string
     */
    public $invalidBasis;

    /**
     * @example ""
     *
     * @var string
     */
    public $issuingNo;

    /**
     * @var string
     */
    public $issuingOrgan;

    /**
     * @example b2274825c8c3bc2343ca73680243ddc8
     *
     * @var string
     */
    public $lawId;

    /**
     * @example ccc209683be1509676174fd6890f24b8
     *
     * @var string
     */
    public $lawItemId;

    /**
     * @var string
     */
    public $lawName;

    /**
     * @var string
     */
    public $lawOrder;

    /**
     * @var string
     */
    public $lawSourceContent;

    /**
     * @var string
     */
    public $lawTitle;

    /**
     * @example "[]"
     *
     * @var string
     */
    public $modifyBasis;

    /**
     * @var string
     */
    public $potencyLevel;

    /**
     * @var string
     */
    public $releaseYearMonthDate;

    /**
     * @example null
     *
     * @var string
     */
    public $thematicClassify;

    /**
     * @var string
     */
    public $timeliness;
    protected $_name = [
        'abolitionBasis'         => 'abolitionBasis',
        'implementYearMonthDate' => 'implementYearMonthDate',
        'invalidBasis'           => 'invalidBasis',
        'issuingNo'              => 'issuingNo',
        'issuingOrgan'           => 'issuingOrgan',
        'lawId'                  => 'lawId',
        'lawItemId'              => 'lawItemId',
        'lawName'                => 'lawName',
        'lawOrder'               => 'lawOrder',
        'lawSourceContent'       => 'lawSourceContent',
        'lawTitle'               => 'lawTitle',
        'modifyBasis'            => 'modifyBasis',
        'potencyLevel'           => 'potencyLevel',
        'releaseYearMonthDate'   => 'releaseYearMonthDate',
        'thematicClassify'       => 'thematicClassify',
        'timeliness'             => 'timeliness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abolitionBasis) {
            $res['abolitionBasis'] = $this->abolitionBasis;
        }
        if (null !== $this->implementYearMonthDate) {
            $res['implementYearMonthDate'] = $this->implementYearMonthDate;
        }
        if (null !== $this->invalidBasis) {
            $res['invalidBasis'] = $this->invalidBasis;
        }
        if (null !== $this->issuingNo) {
            $res['issuingNo'] = $this->issuingNo;
        }
        if (null !== $this->issuingOrgan) {
            $res['issuingOrgan'] = $this->issuingOrgan;
        }
        if (null !== $this->lawId) {
            $res['lawId'] = $this->lawId;
        }
        if (null !== $this->lawItemId) {
            $res['lawItemId'] = $this->lawItemId;
        }
        if (null !== $this->lawName) {
            $res['lawName'] = $this->lawName;
        }
        if (null !== $this->lawOrder) {
            $res['lawOrder'] = $this->lawOrder;
        }
        if (null !== $this->lawSourceContent) {
            $res['lawSourceContent'] = $this->lawSourceContent;
        }
        if (null !== $this->lawTitle) {
            $res['lawTitle'] = $this->lawTitle;
        }
        if (null !== $this->modifyBasis) {
            $res['modifyBasis'] = $this->modifyBasis;
        }
        if (null !== $this->potencyLevel) {
            $res['potencyLevel'] = $this->potencyLevel;
        }
        if (null !== $this->releaseYearMonthDate) {
            $res['releaseYearMonthDate'] = $this->releaseYearMonthDate;
        }
        if (null !== $this->thematicClassify) {
            $res['thematicClassify'] = $this->thematicClassify;
        }
        if (null !== $this->timeliness) {
            $res['timeliness'] = $this->timeliness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lawDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['abolitionBasis'])) {
            $model->abolitionBasis = $map['abolitionBasis'];
        }
        if (isset($map['implementYearMonthDate'])) {
            $model->implementYearMonthDate = $map['implementYearMonthDate'];
        }
        if (isset($map['invalidBasis'])) {
            $model->invalidBasis = $map['invalidBasis'];
        }
        if (isset($map['issuingNo'])) {
            $model->issuingNo = $map['issuingNo'];
        }
        if (isset($map['issuingOrgan'])) {
            $model->issuingOrgan = $map['issuingOrgan'];
        }
        if (isset($map['lawId'])) {
            $model->lawId = $map['lawId'];
        }
        if (isset($map['lawItemId'])) {
            $model->lawItemId = $map['lawItemId'];
        }
        if (isset($map['lawName'])) {
            $model->lawName = $map['lawName'];
        }
        if (isset($map['lawOrder'])) {
            $model->lawOrder = $map['lawOrder'];
        }
        if (isset($map['lawSourceContent'])) {
            $model->lawSourceContent = $map['lawSourceContent'];
        }
        if (isset($map['lawTitle'])) {
            $model->lawTitle = $map['lawTitle'];
        }
        if (isset($map['modifyBasis'])) {
            $model->modifyBasis = $map['modifyBasis'];
        }
        if (isset($map['potencyLevel'])) {
            $model->potencyLevel = $map['potencyLevel'];
        }
        if (isset($map['releaseYearMonthDate'])) {
            $model->releaseYearMonthDate = $map['releaseYearMonthDate'];
        }
        if (isset($map['thematicClassify'])) {
            $model->thematicClassify = $map['thematicClassify'];
        }
        if (isset($map['timeliness'])) {
            $model->timeliness = $map['timeliness'];
        }

        return $model;
    }
}
