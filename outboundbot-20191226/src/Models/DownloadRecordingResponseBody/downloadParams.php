<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DownloadRecordingResponseBody;

use AlibabaCloud\Dara\Model;

class downloadParams extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $signatureUrl;

    /**
     * @var string
     */
    public $voiceSliceRecordingListJson;
    protected $_name = [
        'fileName' => 'FileName',
        'signatureUrl' => 'SignatureUrl',
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

        if (null !== $this->signatureUrl) {
            $res['SignatureUrl'] = $this->signatureUrl;
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

        if (isset($map['SignatureUrl'])) {
            $model->signatureUrl = $map['SignatureUrl'];
        }

        if (isset($map['VoiceSliceRecordingListJson'])) {
            $model->voiceSliceRecordingListJson = $map['VoiceSliceRecordingListJson'];
        }

        return $model;
    }
}
