<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationVersionShrinkRequest extends Model
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
    public $synthesizerConfigShrink;

    /**
     * @var string
     */
    public $transcriberConfigShrink;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'businessUnitId' => 'BusinessUnitId',
        'interactionConfigShrink' => 'InteractionConfig',
        'scriptProfileShrink' => 'ScriptProfile',
        'synthesizerConfigShrink' => 'SynthesizerConfig',
        'transcriberConfigShrink' => 'TranscriberConfig',
        'versionId' => 'VersionId',
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

        if (null !== $this->synthesizerConfigShrink) {
            $res['SynthesizerConfig'] = $this->synthesizerConfigShrink;
        }

        if (null !== $this->transcriberConfigShrink) {
            $res['TranscriberConfig'] = $this->transcriberConfigShrink;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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

        if (isset($map['SynthesizerConfig'])) {
            $model->synthesizerConfigShrink = $map['SynthesizerConfig'];
        }

        if (isset($map['TranscriberConfig'])) {
            $model->transcriberConfigShrink = $map['TranscriberConfig'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
