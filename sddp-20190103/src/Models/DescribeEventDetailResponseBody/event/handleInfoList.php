<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;

use AlibabaCloud\Tea\Model;

class handleInfoList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $enableTime;

    /**
     * @var int
     */
    public $handlerValue;

    /**
     * @var int
     */
    public $disableTime;

    /**
     * @var string
     */
    public $handlerName;

    /**
     * @var string
     */
    public $handlerType;

    /**
     * @var string
     */
    public $currentValue;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'       => 'Status',
        'enableTime'   => 'EnableTime',
        'handlerValue' => 'HandlerValue',
        'disableTime'  => 'DisableTime',
        'handlerName'  => 'HandlerName',
        'handlerType'  => 'HandlerType',
        'currentValue' => 'CurrentValue',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }
        if (null !== $this->handlerValue) {
            $res['HandlerValue'] = $this->handlerValue;
        }
        if (null !== $this->disableTime) {
            $res['DisableTime'] = $this->disableTime;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->handlerType) {
            $res['HandlerType'] = $this->handlerType;
        }
        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handleInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }
        if (isset($map['HandlerValue'])) {
            $model->handlerValue = $map['HandlerValue'];
        }
        if (isset($map['DisableTime'])) {
            $model->disableTime = $map['DisableTime'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['HandlerType'])) {
            $model->handlerType = $map['HandlerType'];
        }
        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
