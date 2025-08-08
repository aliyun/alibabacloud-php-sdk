<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\ModelSetModelProfile;

use AlibabaCloud\Dara\Model;

class props extends Model
{
    /**
     * @var int
     */
    public $contextSize;

    /**
     * @var string
     */
    public $llmMode;
    protected $_name = [
        'contextSize' => 'contextSize',
        'llmMode' => 'llmMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextSize) {
            $res['contextSize'] = $this->contextSize;
        }

        if (null !== $this->llmMode) {
            $res['llmMode'] = $this->llmMode;
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
        if (isset($map['contextSize'])) {
            $model->contextSize = $map['contextSize'];
        }

        if (isset($map['llmMode'])) {
            $model->llmMode = $map['llmMode'];
        }

        return $model;
    }
}
