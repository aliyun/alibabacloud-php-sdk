<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkAppInfo extends Model
{
    /**
     * @example s202207151211hz0cb4*****
     *
     * @var string
     */
    public $appId;

    /**
     * @example Spark Test
     *
     * @var string
     */
    public $appName;

    /**
     * @example amv-23xxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var Detail
     */
    public $detail;

    /**
     * @example WARN: Disk is full
     *
     * @var string
     */
    public $message;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $priority;

    /**
     * @example FAILED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'DBClusterId' => 'DBClusterId',
        'detail'      => 'Detail',
        'message'     => 'Message',
        'priority'    => 'Priority',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SparkAppInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = Detail::fromMap($map['Detail']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
