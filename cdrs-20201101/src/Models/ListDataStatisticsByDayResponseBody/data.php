<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListDataStatisticsByDayResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bodyNumber;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $faceNumber;

    /**
     * @var int
     */
    public $motorNumber;

    /**
     * @var int
     */
    public $nonMotorNumber;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'bodyNumber'     => 'BodyNumber',
        'corpId'         => 'CorpId',
        'date'           => 'Date',
        'faceNumber'     => 'FaceNumber',
        'motorNumber'    => 'MotorNumber',
        'nonMotorNumber' => 'NonMotorNumber',
        'totalNumber'    => 'TotalNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyNumber) {
            $res['BodyNumber'] = $this->bodyNumber;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->faceNumber) {
            $res['FaceNumber'] = $this->faceNumber;
        }
        if (null !== $this->motorNumber) {
            $res['MotorNumber'] = $this->motorNumber;
        }
        if (null !== $this->nonMotorNumber) {
            $res['NonMotorNumber'] = $this->nonMotorNumber;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
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
        if (isset($map['BodyNumber'])) {
            $model->bodyNumber = $map['BodyNumber'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['FaceNumber'])) {
            $model->faceNumber = $map['FaceNumber'];
        }
        if (isset($map['MotorNumber'])) {
            $model->motorNumber = $map['MotorNumber'];
        }
        if (isset($map['NonMotorNumber'])) {
            $model->nonMotorNumber = $map['NonMotorNumber'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
