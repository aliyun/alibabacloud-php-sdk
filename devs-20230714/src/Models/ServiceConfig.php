<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ServiceConfig extends Model
{
    /**
     * @var ArtifactMeta
     */
    public $artifact;

    /**
     * @var BuildConfig
     */
    public $build;

    /**
     * @var string
     */
    public $component;

    /**
     * @var mixed[]
     */
    public $props;

    /**
     * @var SourceConfig
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var Variable[]
     */
    public $variables;
    protected $_name = [
        'artifact' => 'artifact',
        'build' => 'build',
        'component' => 'component',
        'props' => 'props',
        'source' => 'source',
        'type' => 'type',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (null !== $this->build) {
            $this->build->validate();
        }
        if (\is_array($this->props)) {
            Model::validateArray($this->props);
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
        }

        if (null !== $this->build) {
            $res['build'] = null !== $this->build ? $this->build->toArray($noStream) : $this->build;
        }

        if (null !== $this->component) {
            $res['component'] = $this->component;
        }

        if (null !== $this->props) {
            if (\is_array($this->props)) {
                $res['props'] = [];
                foreach ($this->props as $key1 => $value1) {
                    $res['props'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['artifact'])) {
            $model->artifact = ArtifactMeta::fromMap($map['artifact']);
        }

        if (isset($map['build'])) {
            $model->build = BuildConfig::fromMap($map['build']);
        }

        if (isset($map['component'])) {
            $model->component = $map['component'];
        }

        if (isset($map['props'])) {
            if (!empty($map['props'])) {
                $model->props = [];
                foreach ($map['props'] as $key1 => $value1) {
                    $model->props[$key1] = $value1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = SourceConfig::fromMap($map['source']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = Variable::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
