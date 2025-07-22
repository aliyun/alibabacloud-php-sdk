<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\customPrompt\customPromptContents;
use AlibabaCloud\Tea\Model;

class customPrompt extends Model
{
    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPromptContents) {
            $res['CustomPromptContents'] = [];
            if (null !== $this->customPromptContents && \is_array($this->customPromptContents)) {
                $n = 0;
                foreach ($this->customPromptContents as $item) {
                    $res['CustomPromptContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customPrompt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomPromptContents'])) {
            if (!empty($map['CustomPromptContents'])) {
                $model->customPromptContents = [];
                $n = 0;
                foreach ($map['CustomPromptContents'] as $item) {
                    $model->customPromptContents[$n++] = null !== $item ? customPromptContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
