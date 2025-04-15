<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\customPrompt\customPromptContents;

class customPrompt extends Model
{
    /**
     * @var customPromptContents[]
     */
    public $customPromptContents;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'customPromptContents' => 'CustomPromptContents',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        if (\is_array($this->customPromptContents)) {
            Model::validateArray($this->customPromptContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPromptContents) {
            if (\is_array($this->customPromptContents)) {
                $res['CustomPromptContents'] = [];
                $n1 = 0;
                foreach ($this->customPromptContents as $item1) {
                    $res['CustomPromptContents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['CustomPromptContents'])) {
            if (!empty($map['CustomPromptContents'])) {
                $model->customPromptContents = [];
                $n1 = 0;
                foreach ($map['CustomPromptContents'] as $item1) {
                    $model->customPromptContents[$n1++] = customPromptContents::fromMap($item1);
                }
            }
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
