<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MobiPluginConfig extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var AppConfigMapping[]
     */
    public $mappings;
    protected $_name = [
        'content' => 'content',
        'mappings' => 'mappings',
    ];

    public function validate()
    {
        if (\is_array($this->mappings)) {
            Model::validateArray($this->mappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->mappings) {
            if (\is_array($this->mappings)) {
                $res['mappings'] = [];
                $n1 = 0;
                foreach ($this->mappings as $item1) {
                    $res['mappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['mappings'])) {
            if (!empty($map['mappings'])) {
                $model->mappings = [];
                $n1 = 0;
                foreach ($map['mappings'] as $item1) {
                    $model->mappings[$n1] = AppConfigMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
