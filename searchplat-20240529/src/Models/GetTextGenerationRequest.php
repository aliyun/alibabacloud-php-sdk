<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationRequest\messages;
use AlibabaCloud\Tea\Model;

class GetTextGenerationRequest extends Model
{
    /**
     * @var string
     */
    public $csiLevel;

    /**
     * @description This parameter is required.
     *
     * @var messages[]
     */
    public $messages;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'csiLevel'   => 'csi_level',
        'messages'   => 'messages',
        'parameters' => 'parameters',
        'stream'     => 'stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csiLevel) {
            $res['csi_level'] = $this->csiLevel;
        }
        if (null !== $this->messages) {
            $res['messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['csi_level'])) {
            $model->csiLevel = $map['csi_level'];
        }
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
