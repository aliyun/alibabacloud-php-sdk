<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Spark application ID.
     *
     * @example s202204132018hzprec1ac****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example LAKEHOUSE-1-1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The cluster ID.
     *
     * @example amv-clusterxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The error message returned.
     *
     * @example [Advisor] Advisor feature is not available for instance: am-2ze292w4fyglwxxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The execution state of the Spark application. Valid values:
     *
     *   **SUBMITTED**
     *   **STARTING**
     *   **RUNNING**
     *   **FAILING**
     *   **FAILED**
     *   **KILLING**
     *   **KILLED**
     *   **SUCCEEDING**
     *   **COMPLETED**
     *   **FATAL**
     *   **UNKNOWN**
     *
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'DBClusterId' => 'DBClusterId',
        'message'     => 'Message',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
