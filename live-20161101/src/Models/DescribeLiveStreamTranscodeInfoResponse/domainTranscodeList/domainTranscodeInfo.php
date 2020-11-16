<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponse\domainTranscodeList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponse\domainTranscodeList\domainTranscodeInfo\customTranscodeParameters;
use AlibabaCloud\Tea\Model;

class domainTranscodeInfo extends Model
{
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

    /**
     * @var customTranscodeParameters
     */
    public $customTranscodeParameters;
    protected $_name = [
        'transcodeApp'              => 'TranscodeApp',
        'transcodeName'             => 'TranscodeName',
        'transcodeTemplate'         => 'TranscodeTemplate',
        'customTranscodeParameters' => 'CustomTranscodeParameters',
    ];

    public function validate()
    {
        Model::validateRequired('transcodeApp', $this->transcodeApp, true);
        Model::validateRequired('transcodeName', $this->transcodeName, true);
        Model::validateRequired('transcodeTemplate', $this->transcodeTemplate, true);
        Model::validateRequired('customTranscodeParameters', $this->customTranscodeParameters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeApp) {
            $res['TranscodeApp'] = $this->transcodeApp;
        }
        if (null !== $this->transcodeName) {
            $res['TranscodeName'] = $this->transcodeName;
        }
        if (null !== $this->transcodeTemplate) {
            $res['TranscodeTemplate'] = $this->transcodeTemplate;
        }
        if (null !== $this->customTranscodeParameters) {
            $res['CustomTranscodeParameters'] = null !== $this->customTranscodeParameters ? $this->customTranscodeParameters->toMap() : null;
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
        if (isset($map['TranscodeApp'])) {
            $model->transcodeApp = $map['TranscodeApp'];
        }
        if (isset($map['TranscodeName'])) {
            $model->transcodeName = $map['TranscodeName'];
        }
        if (isset($map['TranscodeTemplate'])) {
            $model->transcodeTemplate = $map['TranscodeTemplate'];
        }
        if (isset($map['CustomTranscodeParameters'])) {
            $model->customTranscodeParameters = customTranscodeParameters::fromMap($map['CustomTranscodeParameters']);
        }

        return $model;
    }
}
