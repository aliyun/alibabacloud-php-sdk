<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCustomQAResponseBody;

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
    public $customQAId;

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
    public $majorQuestion;

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
        'customQAId' => 'CustomQAId',
        'hotelId' => 'HotelId',
        'keyWords' => 'KeyWords',
        'majorQuestion' => 'MajorQuestion',
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

        if (null !== $this->customQAId) {
            $res['CustomQAId'] = $this->customQAId;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }

        if (null !== $this->majorQuestion) {
            $res['MajorQuestion'] = $this->majorQuestion;
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

        if (isset($map['CustomQAId'])) {
            $model->customQAId = $map['CustomQAId'];
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['KeyWords'])) {
            $model->keyWords = $map['KeyWords'];
        }

        if (isset($map['MajorQuestion'])) {
            $model->majorQuestion = $map['MajorQuestion'];
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
