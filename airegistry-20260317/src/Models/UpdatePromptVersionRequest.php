<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class UpdatePromptVersionRequest extends Model
{
    /**
     * @var string
     */
    public $commitMsg;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $promptKey;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $variables;
    protected $_name = [
        'commitMsg' => 'CommitMsg',
        'namespaceId' => 'NamespaceId',
        'promptKey' => 'PromptKey',
        'template' => 'Template',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitMsg) {
            $res['CommitMsg'] = $this->commitMsg;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
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
        if (isset($map['CommitMsg'])) {
            $model->commitMsg = $map['CommitMsg'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
