<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListPersonTrackRequest extends Model
{
    /**
     * @example corp_time
     *
     * @var string
     */
    public $aggregateDimension;

    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example face
     *
     * @var string
     */
    public $imageSourceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $qualityScore;

    /**
     * @example 2021-01-20 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'aggregateDimension' => 'AggregateDimension',
        'corpId'             => 'CorpId',
        'endTime'            => 'EndTime',
        'imageSourceType'    => 'ImageSourceType',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'personId'           => 'PersonId',
        'qualityScore'       => 'QualityScore',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateDimension) {
            $res['AggregateDimension'] = $this->aggregateDimension;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->imageSourceType) {
            $res['ImageSourceType'] = $this->imageSourceType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPersonTrackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDimension'])) {
            $model->aggregateDimension = $map['AggregateDimension'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ImageSourceType'])) {
            $model->imageSourceType = $map['ImageSourceType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
