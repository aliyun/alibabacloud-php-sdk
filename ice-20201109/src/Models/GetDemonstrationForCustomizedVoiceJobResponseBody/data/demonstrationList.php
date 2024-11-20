<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class demonstrationList extends Model
{
    /**
     * @description The sequence number of the text, which corresponds to the AduioRecordId parameter to be passed during audio check.
     *
     * @example 2
     *
     * @var int
     */
    public $audioId;

    /**
     * @description The URL of the sample audio.
     *
     *   The value is an Object Storage Service (OSS) URL.
     *
     **
     *
     **Note**: The URL expires in 12 hours.
     *
     * @example http://bucket.oss-cn-shanghai.aliyuncs.com/1.wav
     *
     * @var string
     */
    public $demoAudio;

    /**
     * @description The text content to be read.
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'audioId'   => 'AudioId',
        'demoAudio' => 'DemoAudio',
        'text'      => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->demoAudio) {
            $res['DemoAudio'] = $this->demoAudio;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demonstrationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['DemoAudio'])) {
            $model->demoAudio = $map['DemoAudio'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
