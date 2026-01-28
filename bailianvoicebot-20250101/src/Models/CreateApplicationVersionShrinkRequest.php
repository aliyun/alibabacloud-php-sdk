<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationVersionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string
     */
    public $interactionConfigShrink;

    /**
     * @var string
     */
    public $scriptProfileShrink;

    /**
     * @var string
     */
    public $sourceVersionId;

    /**
     * @var string
     */
    public $synthesizerConfigShrink;

    /**
     * @var string
     */
    public $transcriberConfigShrink;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'businessUnitId' => 'BusinessUnitId',
        'interactionConfigShrink' => 'InteractionConfig',
        'scriptProfileShrink' => 'ScriptProfile',
        'sourceVersionId' => 'SourceVersionId',
        'synthesizerConfigShrink' => 'SynthesizerConfig',
        'transcriberConfigShrink' => 'TranscriberConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
        }

        if (null !== $this->interactionConfigShrink) {
            $res['InteractionConfig'] = $this->interactionConfigShrink;
        }

        if (null !== $this->scriptProfileShrink) {
            $res['ScriptProfile'] = $this->scriptProfileShrink;
        }

        if (null !== $this->sourceVersionId) {
            $res['SourceVersionId'] = $this->sourceVersionId;
        }

        if (null !== $this->synthesizerConfigShrink) {
            $res['SynthesizerConfig'] = $this->synthesizerConfigShrink;
        }

        if (null !== $this->transcriberConfigShrink) {
            $res['TranscriberConfig'] = $this->transcriberConfigShrink;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        if (isset($map['InteractionConfig'])) {
            $model->interactionConfigShrink = $map['InteractionConfig'];
        }

        if (isset($map['ScriptProfile'])) {
            $model->scriptProfileShrink = $map['ScriptProfile'];
        }

        if (isset($map['SourceVersionId'])) {
            $model->sourceVersionId = $map['SourceVersionId'];
        }

        if (isset($map['SynthesizerConfig'])) {
            $model->synthesizerConfigShrink = $map['SynthesizerConfig'];
        }

        if (isset($map['TranscriberConfig'])) {
            $model->transcriberConfigShrink = $map['TranscriberConfig'];
        }

        return $model;
    }
}
