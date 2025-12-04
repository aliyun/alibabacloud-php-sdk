<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsResponseBody\data\dataEventSelectorInfos;

use AlibabaCloud\Dara\Model;

class slsDeliveryConfigs extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $regionSlsProjectArn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trailRegion;
    protected $_name = [
        'createTime' => 'CreateTime',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'regionSlsProjectArn' => 'RegionSlsProjectArn',
        'status' => 'Status',
        'trailRegion' => 'TrailRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->regionSlsProjectArn) {
            $res['RegionSlsProjectArn'] = $this->regionSlsProjectArn;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RegionSlsProjectArn'])) {
            $model->regionSlsProjectArn = $map['RegionSlsProjectArn'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }

        return $model;
    }
}
