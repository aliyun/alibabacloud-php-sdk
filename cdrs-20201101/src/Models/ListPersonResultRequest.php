<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListPersonResultRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $profession;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $qualityScore;
    protected $_name = [
        'corpId'       => 'CorpId',
        'age'          => 'Age',
        'gender'       => 'Gender',
        'profession'   => 'Profession',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'qualityScore' => 'QualityScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->profession) {
            $res['Profession'] = $this->profession;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPersonResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Profession'])) {
            $model->profession = $map['Profession'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }

        return $model;
    }
}
