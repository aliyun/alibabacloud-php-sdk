<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SendLiveTranscodeJobCommandRequest extends Model
{
    /**
     * @description The operation command. Only the stop command is supported. This command is used to stop a transcoding job.
     *
     * This parameter is required.
     * @example stop
     *
     * @var string
     */
    public $command;

    /**
     * @description The ID of the transcoding job.
     *
     * This parameter is required.
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'command' => 'Command',
        'jobId'   => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendLiveTranscodeJobCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
