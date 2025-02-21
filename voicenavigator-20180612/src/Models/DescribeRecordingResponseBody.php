<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class DescribeRecordingResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $voiceSliceRecordingListJson;
    protected $_name = [
        'fileName'                    => 'FileName',
        'filePath'                    => 'FilePath',
        'requestId'                   => 'RequestId',
        'voiceSliceRecordingListJson' => 'VoiceSliceRecordingListJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->voiceSliceRecordingListJson) {
            $res['VoiceSliceRecordingListJson'] = $this->voiceSliceRecordingListJson;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VoiceSliceRecordingListJson'])) {
            $model->voiceSliceRecordingListJson = $map['VoiceSliceRecordingListJson'];
        }

        return $model;
    }
}
