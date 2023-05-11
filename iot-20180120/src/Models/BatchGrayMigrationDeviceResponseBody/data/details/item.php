<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGrayMigrationDeviceResponseBody\data\details;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $code;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $message;

    /**
     * @example SUCCEEDEED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'       => 'Code',
        'deviceName' => 'DeviceName',
        'message'    => 'Message',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
