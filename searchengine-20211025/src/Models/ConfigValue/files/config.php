<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ConfigValue\files;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ConfigValueFilesConfigVariablesValue;

class config extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var ConfigValueFilesConfigVariablesValue[]
     */
    public $variables;
    protected $_name = [
        'content' => 'content',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = ConfigValueFilesConfigVariablesValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
