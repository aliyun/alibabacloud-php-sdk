<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\ListPushMsgResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $createdDateStr;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $pushTime;

    /**
     * @var string
     */
    public $pushTimeStr;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusStr;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $userNum;
    protected $_name = [
        'createdDate' => 'CreatedDate',
        'createdDateStr' => 'CreatedDateStr',
        'id' => 'Id',
        'pushTime' => 'PushTime',
        'pushTimeStr' => 'PushTimeStr',
        'spec' => 'Spec',
        'status' => 'Status',
        'statusStr' => 'StatusStr',
        'title' => 'Title',
        'userNum' => 'UserNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }

        if (null !== $this->createdDateStr) {
            $res['CreatedDateStr'] = $this->createdDateStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }

        if (null !== $this->pushTimeStr) {
            $res['PushTimeStr'] = $this->pushTimeStr;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusStr) {
            $res['StatusStr'] = $this->statusStr;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userNum) {
            $res['UserNum'] = $this->userNum;
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
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }

        if (isset($map['CreatedDateStr'])) {
            $model->createdDateStr = $map['CreatedDateStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }

        if (isset($map['PushTimeStr'])) {
            $model->pushTimeStr = $map['PushTimeStr'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusStr'])) {
            $model->statusStr = $map['StatusStr'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserNum'])) {
            $model->userNum = $map['UserNum'];
        }

        return $model;
    }
}
