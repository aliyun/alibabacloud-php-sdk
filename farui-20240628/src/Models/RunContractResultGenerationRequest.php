<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant;
use AlibabaCloud\Tea\Model;

class RunContractResultGenerationRequest extends Model
{
    /**
     * @example farui
     *
     * @var string
     */
    public $appId;

    /**
     * @var assistant
     */
    public $assistant;

    /**
     * @example true
     *
     * @var bool
     */
    public $stream;
    protected $_name = [
        'appId'     => 'appId',
        'assistant' => 'assistant',
        'stream'    => 'stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->assistant) {
            $res['assistant'] = null !== $this->assistant ? $this->assistant->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunContractResultGenerationRequest
     */
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
