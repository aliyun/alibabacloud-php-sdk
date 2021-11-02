<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;

use AlibabaCloud\Tea\Model;

class handleInfoList extends Model
{
    /**
     * @var string
     */
    public $currentValue;

    /**
     * @var int
     */
    public $disableTime;

    /**
     * @var int
     */
    public $enableTime;

    /**
     * @var string
     */
    public $handlerName;

    /**
     * @var string
     */
    public $handlerType;

    /**
     * @var int
     */
    public $handlerValue;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'currentValue' => 'CurrentValue',
        'disableTime'  => 'DisableTime',
        'enableTime'   => 'EnableTime',
        'handlerName'  => 'HandlerName',
        'handlerType'  => 'HandlerType',
        'handlerValue' => 'HandlerValue',
        'id'           => 'Id',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }
        if (null !== $this->disableTime) {
            $res['DisableTime'] = $this->disableTime;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->handlerType) {
            $res['HandlerType'] = $this->handlerType;
        }
        if (null !== $this->handlerValue) {
            $res['HandlerValue'] = $this->handlerValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }
        if (isset($map['DisableTime'])) {
            $model->disableTime = $map['DisableTime'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['HandlerType'])) {
            $model->handlerType = $map['HandlerType'];
        }
        if (isset($map['HandlerValue'])) {
            $model->handlerValue = $map['HandlerValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
