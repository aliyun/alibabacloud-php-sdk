<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages\knowledge;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages\recommends;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages\text;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var knowledge
     */
    public $knowledge;

    /**
     * @var text
     */
    public $text;

    /**
     * @var recommends[]
     */
    public $recommends;
    protected $_name = [
        'type'       => 'Type',
        'knowledge'  => 'Knowledge',
        'text'       => 'Text',
        'recommends' => 'Recommends',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->knowledge) {
            $res['Knowledge'] = null !== $this->knowledge ? $this->knowledge->toMap() : null;
        }
        if (null !== $this->text) {
            $res['Text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->recommends) {
            $res['Recommends'] = [];
            if (null !== $this->recommends && \is_array($this->recommends)) {
                $n = 0;
                foreach ($this->recommends as $item) {
                    $res['Recommends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Knowledge'])) {
            $model->knowledge = knowledge::fromMap($map['Knowledge']);
        }
        if (isset($map['Text'])) {
            $model->text = text::fromMap($map['Text']);
        }
        if (isset($map['Recommends'])) {
            if (!empty($map['Recommends'])) {
                $model->recommends = [];
                $n                 = 0;
                foreach ($map['Recommends'] as $item) {
                    $model->recommends[$n++] = null !== $item ? recommends::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
