<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunResponseBody;

use AlibabaCloud\Dara\Model;

class dagrunList extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var int
     */
    public $endExecuteTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $startExecuteTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplementId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'duration' => 'Duration',
        'endExecuteTime' => 'EndExecuteTime',
        'id' => 'Id',
        'startExecuteTime' => 'StartExecuteTime',
        'status' => 'Status',
        'supplementId' => 'SupplementId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->endExecuteTime) {
            $res['EndExecuteTime'] = $this->endExecuteTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->startExecuteTime) {
            $res['StartExecuteTime'] = $this->startExecuteTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EndExecuteTime'])) {
            $model->endExecuteTime = $map['EndExecuteTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['StartExecuteTime'])) {
            $model->startExecuteTime = $map['StartExecuteTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }

        return $model;
    }
}
