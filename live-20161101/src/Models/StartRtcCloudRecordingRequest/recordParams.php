<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\Dara\Model;

class recordParams extends Model
{
    /**
     * @var int
     */
    public $maxFileDuration;

    /**
     * @var int
     */
    public $recordMode;

    /**
     * @var int
     */
    public $streamType;
    protected $_name = [
        'maxFileDuration' => 'MaxFileDuration',
        'recordMode' => 'RecordMode',
        'streamType' => 'StreamType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
