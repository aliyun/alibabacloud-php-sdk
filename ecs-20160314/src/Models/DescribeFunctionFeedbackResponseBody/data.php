<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeFunctionFeedbackResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeFunctionFeedbackResponseBody\data\feedback;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var feedback[]
     */
    public $feedback;
    protected $_name = [
        'feedback' => 'feedback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['feedback'] = [];
            if (null !== $this->feedback && \is_array($this->feedback)) {
                $n = 0;
                foreach ($this->feedback as $item) {
                    $res['feedback'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['feedback'])) {
            if (!empty($map['feedback'])) {
                $model->feedback = [];
                $n               = 0;
                foreach ($map['feedback'] as $item) {
                    $model->feedback[$n++] = null !== $item ? feedback::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
