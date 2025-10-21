<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\blockWord;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\denyTopics;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\harmfulCategories;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\promptAttack;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\sensitiveType;

class traceInfo extends Model
{
    /**
     * @var blockWord
     */
    public $blockWord;

    /**
     * @var denyTopics
     */
    public $denyTopics;

    /**
     * @var harmfulCategories
     */
    public $harmfulCategories;

    /**
     * @var promptAttack
     */
    public $promptAttack;

    /**
     * @var sensitiveType
     */
    public $sensitiveType;
    protected $_name = [
        'blockWord' => 'BlockWord',
        'denyTopics' => 'DenyTopics',
        'harmfulCategories' => 'HarmfulCategories',
        'promptAttack' => 'PromptAttack',
        'sensitiveType' => 'SensitiveType',
    ];

    public function validate()
    {
        if (null !== $this->blockWord) {
            $this->blockWord->validate();
        }
        if (null !== $this->denyTopics) {
            $this->denyTopics->validate();
        }
        if (null !== $this->harmfulCategories) {
            $this->harmfulCategories->validate();
        }
        if (null !== $this->promptAttack) {
            $this->promptAttack->validate();
        }
        if (null !== $this->sensitiveType) {
            $this->sensitiveType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockWord) {
            $res['BlockWord'] = null !== $this->blockWord ? $this->blockWord->toArray($noStream) : $this->blockWord;
        }

        if (null !== $this->denyTopics) {
            $res['DenyTopics'] = null !== $this->denyTopics ? $this->denyTopics->toArray($noStream) : $this->denyTopics;
        }

        if (null !== $this->harmfulCategories) {
            $res['HarmfulCategories'] = null !== $this->harmfulCategories ? $this->harmfulCategories->toArray($noStream) : $this->harmfulCategories;
        }

        if (null !== $this->promptAttack) {
            $res['PromptAttack'] = null !== $this->promptAttack ? $this->promptAttack->toArray($noStream) : $this->promptAttack;
        }

        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = null !== $this->sensitiveType ? $this->sensitiveType->toArray($noStream) : $this->sensitiveType;
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
        if (isset($map['BlockWord'])) {
            $model->blockWord = blockWord::fromMap($map['BlockWord']);
        }

        if (isset($map['DenyTopics'])) {
            $model->denyTopics = denyTopics::fromMap($map['DenyTopics']);
        }

        if (isset($map['HarmfulCategories'])) {
            $model->harmfulCategories = harmfulCategories::fromMap($map['HarmfulCategories']);
        }

        if (isset($map['PromptAttack'])) {
            $model->promptAttack = promptAttack::fromMap($map['PromptAttack']);
        }

        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = sensitiveType::fromMap($map['SensitiveType']);
        }

        return $model;
    }
}
