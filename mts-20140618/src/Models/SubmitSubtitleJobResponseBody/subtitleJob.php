<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSubtitleJobResponseBody;

use AlibabaCloud\Tea\Model;

class subtitleJob extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'jobId'       => 'JobId',
        'inputConfig' => 'InputConfig',
        'userData'    => 'UserData',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
