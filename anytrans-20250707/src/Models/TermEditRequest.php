<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditRequest\ext;

class TermEditRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var ext
     */
    public $ext;

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
    public $workspaceId;
    protected $_name = [
        'action' => 'action',
        'ext' => 'ext',
        'scene' => 'scene',
        'sourceLanguage' => 'sourceLanguage',
        'targetLanguage' => 'targetLanguage',
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
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->ext) {
            $res['ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['ext'])) {
            $model->ext = ext::fromMap($map['ext']);
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

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
