<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponseBody\data\ext\llmContent;

class ext extends Model
{
    /**
     * @var llmContent
     */
    public $llmContent;
    protected $_name = [
        'llmContent' => 'llmContent',
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
            $res['llmContent'] = null !== $this->llmContent ? $this->llmContent->toArray($noStream) : $this->llmContent;
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
        if (isset($map['llmContent'])) {
            $model->llmContent = llmContent::fromMap($map['llmContent']);
        }

        return $model;
    }
}
