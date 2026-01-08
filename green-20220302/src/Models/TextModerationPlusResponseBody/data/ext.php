<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\ext\llmContent;

class ext extends Model
{
    /**
     * @var llmContent
     */
    public $llmContent;
    protected $_name = [
        'llmContent' => 'LlmContent',
    ];

    public function validate()
    {
        if (null !== $this->llmContent) {
            $this->llmContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmContent) {
            $res['LlmContent'] = null !== $this->llmContent ? $this->llmContent->toArray($noStream) : $this->llmContent;
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
        if (isset($map['LlmContent'])) {
            $model->llmContent = llmContent::fromMap($map['LlmContent']);
        }

        return $model;
    }
}
