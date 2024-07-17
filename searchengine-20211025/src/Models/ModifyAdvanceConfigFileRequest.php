<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyAdvanceConfigFileRequest extends Model
{
    /**
     * @description The file content.
     *
     * @example "ha3"
     *
     * @var string
     */
    public $content;

    /**
     * @description The variables.
     *
     * @var VariablesValue[]
     */
    public $variables;

    /**
     * @description The name of the file.
     *
     * This parameter is required.
     * @example /qrs.json
     *
     * @var string
     */
    public $fileName;
    protected $_name = [
        'content'   => 'content',
        'variables' => 'variables',
        'fileName'  => 'fileName',
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
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAdvanceConfigFileRequest
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
