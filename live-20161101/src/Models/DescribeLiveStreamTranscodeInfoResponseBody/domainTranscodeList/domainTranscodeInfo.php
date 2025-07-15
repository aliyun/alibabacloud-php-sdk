<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo\customTranscodeParameters;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo\encryptParameters;
use AlibabaCloud\Tea\Model;

class domainTranscodeInfo extends Model
{
    /**
     * @description The custom transcoding configuration.
     *
     * @var customTranscodeParameters
     */
    public $customTranscodeParameters;

    /**
     * @description The encryption settings.
     *
     * @var encryptParameters
     */
    public $encryptParameters;

    /**
     * @description Indicates whether forcible transcoding is used. Valid values:
     *
     *   **true**: Delayed transcoding is used.
     *   **false**: Forcible transcoding is used.
     *
     * @example true
     *
     * @var bool
     */
    public $isLazy;

    /**
     * @description The application name.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $transcodeApp;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $transcodeName;

    /**
     * @description The transcoding template ID. Valid values:
     *
     *   **Standard transcoding**:
     *
     *   **lld**: low definition
     *   **lsd**: standard definition
     *   **lhd**: high definition
     *   **lud**: ultra-high definition
     *
     *   **Narrowband HD™ transcoding**:
     *
     *   **ld**: low definition
     *   **sd**: standard definition
     *   **hd**: high definition
     *   **ud**: ultra-high definition
     *
     * @example lld
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTranscodeParameters) {
            $res['CustomTranscodeParameters'] = null !== $this->customTranscodeParameters ? $this->customTranscodeParameters->toMap() : null;
        }
        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = null !== $this->encryptParameters ? $this->encryptParameters->toMap() : null;
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
