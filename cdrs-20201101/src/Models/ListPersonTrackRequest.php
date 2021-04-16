<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListPersonTrackRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $personId;

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
    public $imageSourceType;

    /**
     * @var string
     */
    public $aggregateDimension;

    /**
     * @var string
     */
    public $qualityScore;
    protected $_name = [
        'corpId'             => 'CorpId',
        'personId'           => 'PersonId',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'imageSourceType'    => 'ImageSourceType',
        'aggregateDimension' => 'AggregateDimension',
        'qualityScore'       => 'QualityScore',
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
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (null !== $this->imageSourceType) {
            $res['ImageSourceType'] = $this->imageSourceType;
        }
        if (null !== $this->aggregateDimension) {
            $res['AggregateDimension'] = $this->aggregateDimension;
        }
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
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
        if (isset($map['ImageSourceType'])) {
            $model->imageSourceType = $map['ImageSourceType'];
        }
        if (isset($map['AggregateDimension'])) {
            $model->aggregateDimension = $map['AggregateDimension'];
        }
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }

        return $model;
    }
}
