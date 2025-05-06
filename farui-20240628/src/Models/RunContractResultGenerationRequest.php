<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant;

class RunContractResultGenerationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var assistant
     */
    public $assistant;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'appId' => 'appId',
        'assistant' => 'assistant',
        'stream' => 'stream',
    ];

    public function validate()
    {
        if (null !== $this->assistant) {
            $this->assistant->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->assistant) {
            $res['assistant'] = null !== $this->assistant ? $this->assistant->toArray($noStream) : $this->assistant;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['assistant'])) {
            $model->assistant = assistant::fromMap($map['assistant']);
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
