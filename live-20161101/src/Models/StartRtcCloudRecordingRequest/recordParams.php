<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\Tea\Model;

class recordParams extends Model
{
    /**
     * @example 7200
     *
     * @var int
     */
    public $maxFileDuration;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $recordMode;

    /**
     * @example 0
     *
     * @var int
     */
    public $streamType;
    protected $_name = [
        'maxFileDuration' => 'MaxFileDuration',
        'recordMode' => 'RecordMode',
        'streamType' => 'StreamType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxFileDuration) {
            $res['MaxFileDuration'] = $this->maxFileDuration;
        }
        if (null !== $this->recordMode) {
            $res['RecordMode'] = $this->recordMode;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxFileDuration'])) {
            $model->maxFileDuration = $map['MaxFileDuration'];
        }
        if (isset($map['RecordMode'])) {
            $model->recordMode = $map['RecordMode'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        return $model;
    }
}
