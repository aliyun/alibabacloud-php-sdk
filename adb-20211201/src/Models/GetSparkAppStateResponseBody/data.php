<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppStateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example s202204191546hzpread6a896000****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the Database.
     *
     * @example amv-clusterxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The alert message returned for the operation, such as task execution failure or insufficient resources. Null is returned if no alert occurs.
     *
     * @example Insufficient resources.
     *
     * @var string
     */
    public $message;

    /**
     * @description The execution state of the application. Valid values:
     *
     *   **SUBMITTED**: The application is submitted.
     *   **STARTING**: The application task is starting.
     *   **RUNNING**: The application task is being executed.
     *   **FAILING**: The application task failed, and the environment is being cleared.
     *   **FAILED**: The application task failed.
     *   **KILLING**: The application task is terminated, and the environment is being cleared.
     *   **KILLED**: The application task is terminated.
     *   **SUCCEEDING**: The application task is completed, and the environment is being cleared.
     *   **COMPLETED**: The application task is completed.
     *   **FATAL**: An unexpected failure occurred.
     *   **UNKNOWN**: An unknown error occurred.
     *
     * @example COMPLETED
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
