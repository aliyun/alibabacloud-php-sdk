<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest\applicationConfig;

use AlibabaCloud\Dara\Model;

class security extends Model
{
    /**
     * @var string
     */
    public $processingStrategy;
    protected $_name = [
        'processingStrategy' => 'processingStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processingStrategy) {
            $res['processingStrategy'] = $this->processingStrategy;
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
        if (isset($map['processingStrategy'])) {
            $model->processingStrategy = $map['processingStrategy'];
        }

        return $model;
    }
}
