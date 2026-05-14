<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponseBody\data\cdrIbDetail;

use AlibabaCloud\Dara\Model;

class ivrFlows extends Model
{
    /**
     * @var int
     */
    public $action;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $pressKey;

    /**
     * @var int
     */
    public $pressTime;

    /**
     * @var int
     */
    public $routerEndTime;

    /**
     * @var int
     */
    public $routerName;

    /**
     * @var int
     */
    public $routerStartTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'action' => 'Action',
        'endTime' => 'EndTime',
        'name' => 'Name',
        'path' => 'Path',
        'pathName' => 'PathName',
        'pressKey' => 'PressKey',
        'pressTime' => 'PressTime',
        'routerEndTime' => 'RouterEndTime',
        'routerName' => 'RouterName',
        'routerStartTime' => 'RouterStartTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        if (null !== $this->pressKey) {
            $res['PressKey'] = $this->pressKey;
        }

        if (null !== $this->pressTime) {
            $res['PressTime'] = $this->pressTime;
        }

        if (null !== $this->routerEndTime) {
            $res['RouterEndTime'] = $this->routerEndTime;
        }

        if (null !== $this->routerName) {
            $res['RouterName'] = $this->routerName;
        }

        if (null !== $this->routerStartTime) {
            $res['RouterStartTime'] = $this->routerStartTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        if (isset($map['PressKey'])) {
            $model->pressKey = $map['PressKey'];
        }

        if (isset($map['PressTime'])) {
            $model->pressTime = $map['PressTime'];
        }

        if (isset($map['RouterEndTime'])) {
            $model->routerEndTime = $map['RouterEndTime'];
        }

        if (isset($map['RouterName'])) {
            $model->routerName = $map['RouterName'];
        }

        if (isset($map['RouterStartTime'])) {
            $model->routerStartTime = $map['RouterStartTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
