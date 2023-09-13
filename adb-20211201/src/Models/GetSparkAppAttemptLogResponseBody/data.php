<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppAttemptLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-clusterxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The content of the log.
     *
     * @example 22/04/22 15:30:49 INFO Utils: Start the dump task because s202207151211hz****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}
     *
     * @var string
     */
    public $logContent;

    /**
     * @description The alert message returned for the request, such as task execution failure or insufficient resources. If no alert occurs, null is returned.
     *
     * @example WARNING: log file maybe deleted, please check oss path: oss://TestBucketName/applog/
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'appId'       => 'AppId',
        'DBClusterId' => 'DBClusterId',
        'logContent'  => 'LogContent',
        'message'     => 'Message',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
