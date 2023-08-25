<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application ID.
     *
     * @example s202204132018hzprec1ac61a000****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example TestApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The alert message returned for the operation, such as task execution failure or insufficient resources. If no alert occurs, null is returned.
     *
     * @example Insufficient resources.
     *
     * @var string
     */
    public $message;

    /**
     * @description The execution state of the application. Valid values:
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
     * @example SUBMITTED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
        'message' => 'Message',
        'state'   => 'State',
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
