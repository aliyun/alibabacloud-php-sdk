<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitLongTextTranslateTaskRequest\ext;

class SubmitLongTextTranslateTaskRequest extends Model
{
    /**
     * @var ext
     */
    public $ext;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'ext' => 'ext',
        'format' => 'format',
        'scene' => 'scene',
        'sourceLanguage' => 'sourceLanguage',
        'targetLanguage' => 'targetLanguage',
        'text' => 'text',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->ext) {
            $this->ext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            $res['ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->sourceLanguage) {
            $res['sourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->targetLanguage) {
            $res['targetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['ext'])) {
            $model->ext = ext::fromMap($map['ext']);
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['sourceLanguage'])) {
            $model->sourceLanguage = $map['sourceLanguage'];
        }

        if (isset($map['targetLanguage'])) {
            $model->targetLanguage = $map['targetLanguage'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
