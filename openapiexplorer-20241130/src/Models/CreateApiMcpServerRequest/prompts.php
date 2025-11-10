<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest\prompts\arguments;

class prompts extends Model
{
    /**
     * @var arguments[]
     */
    public $arguments;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'arguments' => 'arguments',
        'content' => 'content',
        'description' => 'description',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->arguments)) {
            Model::validateArray($this->arguments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arguments) {
            if (\is_array($this->arguments)) {
                $res['arguments'] = [];
                $n1 = 0;
                foreach ($this->arguments as $item1) {
                    $res['arguments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['arguments'])) {
            if (!empty($map['arguments'])) {
                $model->arguments = [];
                $n1 = 0;
                foreach ($map['arguments'] as $item1) {
                    $model->arguments[$n1] = arguments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
