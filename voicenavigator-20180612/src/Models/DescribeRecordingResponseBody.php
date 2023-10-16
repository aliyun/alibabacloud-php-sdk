<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordingResponseBody extends Model
{
    /**
     * @example 2019080913202222.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example url
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 14C39896-AE6D-4643-9C9A-E0566B2C2DDD
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeRecordingResponseBody
     */
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
