<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyDataResponseBody\monitorData;

use AlibabaCloud\Dara\Model;

class faceVerifyData extends Model
{
    /**
     * @var string
     */
    public $conDate;

    /**
     * @var string
     */
    public $failCnt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $succCnt;

    /**
     * @var string
     */
    public $totalCnt;
    protected $_name = [
        'conDate' => 'ConDate',
        'failCnt' => 'FailCnt',
        'name' => 'Name',
        'sceneId' => 'SceneId',
        'succCnt' => 'SuccCnt',
        'totalCnt' => 'TotalCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conDate) {
            $res['ConDate'] = $this->conDate;
        }

        if (null !== $this->failCnt) {
            $res['FailCnt'] = $this->failCnt;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->succCnt) {
            $res['SuccCnt'] = $this->succCnt;
        }

        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
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
        if (isset($map['ConDate'])) {
            $model->conDate = $map['ConDate'];
        }

        if (isset($map['FailCnt'])) {
            $model->failCnt = $map['FailCnt'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SuccCnt'])) {
            $model->succCnt = $map['SuccCnt'];
        }

        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
