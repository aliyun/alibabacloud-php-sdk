<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventDetailByRequestIdRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sRequestId;
    protected $_name = [
        'lang'       => 'Lang',
        'eventCode'  => 'eventCode',
        'eventTime'  => 'eventTime',
        'regId'      => 'regId',
        'sRequestId' => 'sRequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventTime) {
            $res['eventTime'] = $this->eventTime;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sRequestId) {
            $res['sRequestId'] = $this->sRequestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventDetailByRequestIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventTime'])) {
            $model->eventTime = $map['eventTime'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sRequestId'])) {
            $model->sRequestId = $map['sRequestId'];
        }

        return $model;
    }
}
