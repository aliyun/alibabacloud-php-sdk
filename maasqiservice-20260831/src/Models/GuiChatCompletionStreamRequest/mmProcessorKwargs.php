<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest;

use AlibabaCloud\Dara\Model;

class mmProcessorKwargs extends Model
{
    /**
     * @var int
     */
    public $maxDynamicPatch;
    protected $_name = [
        'maxDynamicPatch' => 'maxDynamicPatch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDynamicPatch) {
            $res['maxDynamicPatch'] = $this->maxDynamicPatch;
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
        if (isset($map['maxDynamicPatch'])) {
            $model->maxDynamicPatch = $map['maxDynamicPatch'];
        }

        return $model;
    }
}
