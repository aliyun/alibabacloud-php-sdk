<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SyncDeviceTimeResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $NTPServer;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $syncInterval;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'NTPServer'     => 'NTPServer',
        'requestId'     => 'RequestId',
        'retryInterval' => 'RetryInterval',
        'syncInterval'  => 'SyncInterval',
        'timeStamp'     => 'TimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('NTPServer', $this->NTPServer, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('retryInterval', $this->retryInterval, true);
        Model::validateRequired('syncInterval', $this->syncInterval, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->NTPServer) {
            $res['NTPServer'] = $this->NTPServer;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->syncInterval) {
            $res['SyncInterval'] = $this->syncInterval;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncDeviceTimeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NTPServer'])) {
            $model->NTPServer = $map['NTPServer'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['SyncInterval'])) {
            $model->syncInterval = $map['SyncInterval'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
