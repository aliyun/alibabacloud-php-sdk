<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListConnQuestionResponseBody\outlines;
use AlibabaCloud\Tea\Model;

class ListConnQuestionResponseBody extends Model
{
    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @example 92B81548-42B9-4B34-924B-4E778AEB412B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'outlines'  => 'Outlines',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outlines) {
            $res['Outlines'] = [];
            if (null !== $this->outlines && \is_array($this->outlines)) {
                $n = 0;
                foreach ($this->outlines as $item) {
                    $res['Outlines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnQuestionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n               = 0;
                foreach ($map['Outlines'] as $item) {
                    $model->outlines[$n++] = null !== $item ? outlines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
