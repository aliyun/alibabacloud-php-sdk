<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobsResponseBody;

use AlibabaCloud\Dara\Model;

class APSJobs extends Model
{
    /**
     * @var string
     */
    public $apsJobId;

    /**
     * @var string
     */
    public $apsJobName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $destinationInstanceID;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $projress;

    /**
     * @var string
     */
    public $sourceInstanceID;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;
    protected $_name = [
        'apsJobId' => 'ApsJobId',
        'apsJobName' => 'ApsJobName',
        'createTime' => 'CreateTime',
        'delay' => 'Delay',
        'destinationInstanceID' => 'DestinationInstanceID',
        'errMessage' => 'ErrMessage',
        'projress' => 'Projress',
        'sourceInstanceID' => 'SourceInstanceID',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apsJobId) {
            $res['ApsJobId'] = $this->apsJobId;
        }

        if (null !== $this->apsJobName) {
            $res['ApsJobName'] = $this->apsJobName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->destinationInstanceID) {
            $res['DestinationInstanceID'] = $this->destinationInstanceID;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->projress) {
            $res['Projress'] = $this->projress;
        }

        if (null !== $this->sourceInstanceID) {
            $res['SourceInstanceID'] = $this->sourceInstanceID;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
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
        if (isset($map['ApsJobId'])) {
            $model->apsJobId = $map['ApsJobId'];
        }

        if (isset($map['ApsJobName'])) {
            $model->apsJobName = $map['ApsJobName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['DestinationInstanceID'])) {
            $model->destinationInstanceID = $map['DestinationInstanceID'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['Projress'])) {
            $model->projress = $map['Projress'];
        }

        if (isset($map['SourceInstanceID'])) {
            $model->sourceInstanceID = $map['SourceInstanceID'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        return $model;
    }
}
