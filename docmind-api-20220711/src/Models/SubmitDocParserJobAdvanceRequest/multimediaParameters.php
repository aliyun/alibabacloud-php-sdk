<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobAdvanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobAdvanceRequest\multimediaParameters\frameExtraction;

class multimediaParameters extends Model
{
    /**
     * @var bool
     */
    public $enableDiarization;

    /**
     * @var bool
     */
    public $enableSynopsisParse;

    /**
     * @var bool
     */
    public $enableSynopsisSegments;

    /**
     * @var bool
     */
    public $enableSynopsisSummary;

    /**
     * @var frameExtraction
     */
    public $frameExtraction;

    /**
     * @var string
     */
    public $vlParsePrompt;
    protected $_name = [
        'enableDiarization' => 'EnableDiarization',
        'enableSynopsisParse' => 'EnableSynopsisParse',
        'enableSynopsisSegments' => 'EnableSynopsisSegments',
        'enableSynopsisSummary' => 'EnableSynopsisSummary',
        'frameExtraction' => 'FrameExtraction',
        'vlParsePrompt' => 'VlParsePrompt',
    ];

    public function validate()
    {
        if (null !== $this->frameExtraction) {
            $this->frameExtraction->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableDiarization) {
            $res['EnableDiarization'] = $this->enableDiarization;
        }

        if (null !== $this->enableSynopsisParse) {
            $res['EnableSynopsisParse'] = $this->enableSynopsisParse;
        }

        if (null !== $this->enableSynopsisSegments) {
            $res['EnableSynopsisSegments'] = $this->enableSynopsisSegments;
        }

        if (null !== $this->enableSynopsisSummary) {
            $res['EnableSynopsisSummary'] = $this->enableSynopsisSummary;
        }

        if (null !== $this->frameExtraction) {
            $res['FrameExtraction'] = null !== $this->frameExtraction ? $this->frameExtraction->toArray($noStream) : $this->frameExtraction;
        }

        if (null !== $this->vlParsePrompt) {
            $res['VlParsePrompt'] = $this->vlParsePrompt;
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
        if (isset($map['EnableDiarization'])) {
            $model->enableDiarization = $map['EnableDiarization'];
        }

        if (isset($map['EnableSynopsisParse'])) {
            $model->enableSynopsisParse = $map['EnableSynopsisParse'];
        }

        if (isset($map['EnableSynopsisSegments'])) {
            $model->enableSynopsisSegments = $map['EnableSynopsisSegments'];
        }

        if (isset($map['EnableSynopsisSummary'])) {
            $model->enableSynopsisSummary = $map['EnableSynopsisSummary'];
        }

        if (isset($map['FrameExtraction'])) {
            $model->frameExtraction = frameExtraction::fromMap($map['FrameExtraction']);
        }

        if (isset($map['VlParsePrompt'])) {
            $model->vlParsePrompt = $map['VlParsePrompt'];
        }

        return $model;
    }
}
