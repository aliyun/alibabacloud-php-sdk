<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAV2ResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $answers;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $keyWords;

    /**
     * @var string
     */
    public $lastOperator;

    /**
     * @var string
     */
    public $majorQuestion;

    /**
     * @var string
     */
    public $qaId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplementaryQuestion;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'answers' => 'Answers',
        'createTime' => 'CreateTime',
        'hotelId' => 'HotelId',
        'keyWords' => 'KeyWords',
        'lastOperator' => 'LastOperator',
        'majorQuestion' => 'MajorQuestion',
        'qaId' => 'QaId',
        'status' => 'Status',
        'supplementaryQuestion' => 'SupplementaryQuestion',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
