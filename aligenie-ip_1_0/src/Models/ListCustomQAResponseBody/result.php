<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCustomQAResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 22;11
     *
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
     * @example 111
     *
     * @var string
     */
    public $customQAId;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 22;11
     *
     * @var string
     */
    public $keyWords;

    /**
     * @example ***
     *
     * @var string
     */
    public $majorQuestion;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 22;11
     *
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
        'customQAId'            => 'CustomQAId',
        'hotelId'               => 'HotelId',
        'keyWords'              => 'KeyWords',
        'majorQuestion'         => 'MajorQuestion',
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
