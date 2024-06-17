<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ConfigValue\files;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ConfigValueFilesConfigVariablesValue;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example $dictContent
     *
     * @var string
     */
    public $content;

    /**
     * @var ConfigValueFilesConfigVariablesValue[]
     */
    public $variables;
    protected $_name = [
        'content'   => 'content',
        'variables' => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                foreach ($this->variables as $key => $val) {
                    $res['variables'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['variables'])) {
            $model->variables = $map['variables'];
        }

        return $model;
    }
}
