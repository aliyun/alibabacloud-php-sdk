<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class RunPipelineConfig extends Model
{
    /**
     * @var PipelineSpec
     */
    public $pipelineSpec;

    /**
     * @var Variable[]
     */
    public $variables;

    /**
     * @var string
     */
    public $yamlFileContent;

    /**
     * @var string
     */
    public $yamlFilePath;
    protected $_name = [
        'pipelineSpec'    => 'pipelineSpec',
        'variables'       => 'variables',
        'yamlFileContent' => 'yamlFileContent',
        'yamlFilePath'    => 'yamlFilePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineSpec) {
            $res['pipelineSpec'] = null !== $this->pipelineSpec ? $this->pipelineSpec->toMap() : null;
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->yamlFileContent) {
            $res['yamlFileContent'] = $this->yamlFileContent;
        }
        if (null !== $this->yamlFilePath) {
            $res['yamlFilePath'] = $this->yamlFilePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPipelineConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pipelineSpec'])) {
            $model->pipelineSpec = PipelineSpec::fromMap($map['pipelineSpec']);
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? Variable::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['yamlFileContent'])) {
            $model->yamlFileContent = $map['yamlFileContent'];
        }
        if (isset($map['yamlFilePath'])) {
            $model->yamlFilePath = $map['yamlFilePath'];
        }

        return $model;
    }
}
