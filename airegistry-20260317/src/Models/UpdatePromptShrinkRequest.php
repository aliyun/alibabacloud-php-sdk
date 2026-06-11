<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class UpdatePromptShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizTagsShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $labelsShrink;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $promptKey;
    protected $_name = [
        'bizTagsShrink' => 'BizTags',
        'description' => 'Description',
        'labelsShrink' => 'Labels',
        'namespaceId' => 'NamespaceId',
        'promptKey' => 'PromptKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTagsShrink) {
            $res['BizTags'] = $this->bizTagsShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->labelsShrink) {
            $res['Labels'] = $this->labelsShrink;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
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
        if (isset($map['BizTags'])) {
            $model->bizTagsShrink = $map['BizTags'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Labels'])) {
            $model->labelsShrink = $map['Labels'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        return $model;
    }
}
