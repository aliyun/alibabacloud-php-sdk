<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo\customTranscodeParameters;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo\encryptParameters;

class domainTranscodeInfo extends Model
{
    /**
     * @var customTranscodeParameters
     */
    public $customTranscodeParameters;

    /**
     * @var encryptParameters
     */
    public $encryptParameters;

    /**
     * @var bool
     */
    public $isLazy;

    /**
     * @var string
     */
    public $transcodeApp;

    /**
     * @var string
     */
    public $transcodeName;

    /**
     * @var string
     */
    public $transcodeTemplate;
    protected $_name = [
        'customTranscodeParameters' => 'CustomTranscodeParameters',
        'encryptParameters' => 'EncryptParameters',
        'isLazy' => 'IsLazy',
        'transcodeApp' => 'TranscodeApp',
        'transcodeName' => 'TranscodeName',
        'transcodeTemplate' => 'TranscodeTemplate',
    ];

    public function validate()
    {
        if (null !== $this->customTranscodeParameters) {
            $this->customTranscodeParameters->validate();
        }
        if (null !== $this->encryptParameters) {
            $this->encryptParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTranscodeParameters) {
            $res['CustomTranscodeParameters'] = null !== $this->customTranscodeParameters ? $this->customTranscodeParameters->toArray($noStream) : $this->customTranscodeParameters;
        }

        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = null !== $this->encryptParameters ? $this->encryptParameters->toArray($noStream) : $this->encryptParameters;
        }

        if (null !== $this->isLazy) {
            $res['IsLazy'] = $this->isLazy;
        }

        if (null !== $this->transcodeApp) {
            $res['TranscodeApp'] = $this->transcodeApp;
        }

        if (null !== $this->transcodeName) {
            $res['TranscodeName'] = $this->transcodeName;
        }

        if (null !== $this->transcodeTemplate) {
            $res['TranscodeTemplate'] = $this->transcodeTemplate;
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
        if (isset($map['CustomTranscodeParameters'])) {
            $model->customTranscodeParameters = customTranscodeParameters::fromMap($map['CustomTranscodeParameters']);
        }

        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = encryptParameters::fromMap($map['EncryptParameters']);
        }

        if (isset($map['IsLazy'])) {
            $model->isLazy = $map['IsLazy'];
        }

        if (isset($map['TranscodeApp'])) {
            $model->transcodeApp = $map['TranscodeApp'];
        }

        if (isset($map['TranscodeName'])) {
            $model->transcodeName = $map['TranscodeName'];
        }

        if (isset($map['TranscodeTemplate'])) {
            $model->transcodeTemplate = $map['TranscodeTemplate'];
        }

        return $model;
    }
}
