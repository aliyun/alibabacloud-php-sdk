<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAV2ResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $answers;

    /**
     * @example 2023-01-10 10:01:59
     *
     * @var string
     */
    public $createTime;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $keyWords;

    /**
     * @example 8xxx9
     *
     * @var string
     */
    public $lastOperator;

    /**
     * @var string
     */
    public $majorQuestion;

    /**
     * @description qaID
     *
     * @example 1
     *
     * @var string
     */
    public $qaId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplementaryQuestion;

    /**
     * @example 2023-01-10 10:01:59
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'answers'               => 'Answers',
        'createTime'            => 'CreateTime',
        'hotelId'               => 'HotelId',
        'keyWords'              => 'KeyWords',
        'lastOperator'          => 'LastOperator',
        'majorQuestion'         => 'MajorQuestion',
        'qaId'                  => 'QaId',
        'status'                => 'Status',
        'supplementaryQuestion' => 'SupplementaryQuestion',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answers) {
            $res['Answers'] = $this->answers;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->lastOperator) {
            $res['LastOperator'] = $this->lastOperator;
        }
        if (null !== $this->majorQuestion) {
            $res['MajorQuestion'] = $this->majorQuestion;
        }
        if (null !== $this->qaId) {
            $res['QaId'] = $this->qaId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplementaryQuestion) {
            $res['SupplementaryQuestion'] = $this->supplementaryQuestion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            $model->answers = $map['Answers'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['KeyWords'])) {
            $model->keyWords = $map['KeyWords'];
        }
        if (isset($map['LastOperator'])) {
            $model->lastOperator = $map['LastOperator'];
        }
        if (isset($map['MajorQuestion'])) {
            $model->majorQuestion = $map['MajorQuestion'];
        }
        if (isset($map['QaId'])) {
            $model->qaId = $map['QaId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplementaryQuestion'])) {
            $model->supplementaryQuestion = $map['SupplementaryQuestion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
