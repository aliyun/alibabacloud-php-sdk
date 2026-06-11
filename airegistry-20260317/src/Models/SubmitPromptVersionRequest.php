<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class SubmitPromptVersionRequest extends Model
{
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
    public $promptVersion;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'promptKey' => 'PromptKey',
        'promptVersion' => 'PromptVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
        }

        if (null !== $this->promptVersion) {
            $res['PromptVersion'] = $this->promptVersion;
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        if (isset($map['PromptVersion'])) {
            $model->promptVersion = $map['PromptVersion'];
        }

        return $model;
    }
}
