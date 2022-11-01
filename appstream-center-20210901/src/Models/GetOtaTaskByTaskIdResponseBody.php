<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetOtaTaskByTaskIdResponseBody extends Model
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
    public $otaVersion;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskStartTime;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'otaVersion'    => 'OtaVersion',
        'releaseNote'   => 'ReleaseNote',
        'requestId'     => 'RequestId',
        'taskStartTime' => 'TaskStartTime',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->otaVersion) {
            $res['OtaVersion'] = $this->otaVersion;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOtaTaskByTaskIdResponseBody
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
        if (isset($map['OtaVersion'])) {
            $model->otaVersion = $map['OtaVersion'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        return $model;
    }
}
