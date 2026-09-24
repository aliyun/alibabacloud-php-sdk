<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class PetHealthAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrlShrink;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string
     */
    public $userPrompt;
    protected $_name = [
        'imageUrlShrink' => 'ImageUrl',
        'systemPrompt' => 'SystemPrompt',
        'userPrompt' => 'UserPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrlShrink) {
            $res['ImageUrl'] = $this->imageUrlShrink;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrlShrink = $map['ImageUrl'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        return $model;
    }
}
