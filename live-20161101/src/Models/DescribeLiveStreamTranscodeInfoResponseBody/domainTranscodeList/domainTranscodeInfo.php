<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo\customTranscodeParameters;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo\encryptParameters;
use AlibabaCloud\Tea\Model;

class domainTranscodeInfo extends Model
{
    /**
     * @var customTranscodeParameters
     */
    public $customTranscodeParameters;

    /**
     * @var string
     */
    public $transcodeApp;

    /**
     * @var string
     */
    public $transcodeTemplate;

    /**
     * @var encryptParameters
     */
    public $encryptParameters;

    /**
     * @var string
     */
    public $transcodeName;
    protected $_name = [
        'customTranscodeParameters' => 'CustomTranscodeParameters',
        'transcodeApp'              => 'TranscodeApp',
        'transcodeTemplate'         => 'TranscodeTemplate',
        'encryptParameters'         => 'EncryptParameters',
        'transcodeName'             => 'TranscodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTranscodeParameters) {
            $res['CustomTranscodeParameters'] = null !== $this->customTranscodeParameters ? $this->customTranscodeParameters->toMap() : null;
        }
        if (null !== $this->transcodeApp) {
            $res['TranscodeApp'] = $this->transcodeApp;
        }
        if (null !== $this->transcodeTemplate) {
            $res['TranscodeTemplate'] = $this->transcodeTemplate;
        }
        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = null !== $this->encryptParameters ? $this->encryptParameters->toMap() : null;
        }
        if (null !== $this->transcodeName) {
            $res['TranscodeName'] = $this->transcodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTranscodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTranscodeParameters'])) {
            $model->customTranscodeParameters = customTranscodeParameters::fromMap($map['CustomTranscodeParameters']);
        }
        if (isset($map['TranscodeApp'])) {
            $model->transcodeApp = $map['TranscodeApp'];
        }
        if (isset($map['TranscodeTemplate'])) {
            $model->transcodeTemplate = $map['TranscodeTemplate'];
        }
        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = encryptParameters::fromMap($map['EncryptParameters']);
        }
        if (isset($map['TranscodeName'])) {
            $model->transcodeName = $map['TranscodeName'];
        }

        return $model;
    }
}
