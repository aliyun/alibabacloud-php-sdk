<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationRequest\messages;

class GetTextGenerationRequest extends Model
{
    /**
     * @var string
     */
    public $csiLevel;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'csiLevel' => 'csi_level',
        'enableSearch' => 'enable_search',
        'messages' => 'messages',
        'parameters' => 'parameters',
        'stream' => 'stream',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csiLevel) {
            $res['csi_level'] = $this->csiLevel;
        }

        if (null !== $this->enableSearch) {
            $res['enable_search'] = $this->enableSearch;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
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
        if (isset($map['csi_level'])) {
            $model->csiLevel = $map['csi_level'];
        }

        if (isset($map['enable_search'])) {
            $model->enableSearch = $map['enable_search'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
