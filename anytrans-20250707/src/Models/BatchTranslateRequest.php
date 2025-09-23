<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateRequest\ext;

class BatchTranslateRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

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
     * @var mixed[]
     */
    public $text;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appName' => 'appName',
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
        if (\is_array($this->text)) {
            Model::validateArray($this->text);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }

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
            if (\is_array($this->text)) {
                $res['text'] = [];
                foreach ($this->text as $key1 => $value1) {
                    $res['text'][$key1] = $value1;
                }
            }
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
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }

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
            if (!empty($map['text'])) {
                $model->text = [];
                foreach ($map['text'] as $key1 => $value1) {
                    $model->text[$key1] = $value1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
