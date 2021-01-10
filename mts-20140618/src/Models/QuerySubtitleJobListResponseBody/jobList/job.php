<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySubtitleJobListResponseBody\jobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySubtitleJobListResponseBody\jobList\job\MNSMessageResult;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;
    protected $_name = [
        'outputConfig'     => 'OutputConfig',
        'state'            => 'State',
        'jobId'            => 'JobId',
        'userData'         => 'UserData',
        'inputConfig'      => 'InputConfig',
        'MNSMessageResult' => 'MNSMessageResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }

        return $model;
    }
}
