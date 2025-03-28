<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\TemplateSpec\source;

class TemplateSpec extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $license;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $readme;

    /**
     * @var string
     */
    public $registryToken;

    /**
     * @var TemplateServiceConfig[]
     */
    public $services;

    /**
     * @var source
     */
    public $source;

    /**
     * @var TemplateParameterSchema[]
     */
    public $variables;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'author' => 'author',
        'category' => 'category',
        'license' => 'license',
        'packageName' => 'packageName',
        'readme' => 'readme',
        'registryToken' => 'registryToken',
        'services' => 'services',
        'source' => 'source',
        'variables' => 'variables',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
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
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->license) {
            $res['license'] = $this->license;
        }

        if (null !== $this->packageName) {
            $res['packageName'] = $this->packageName;
        }

        if (null !== $this->readme) {
            $res['readme'] = $this->readme;
        }

        if (null !== $this->registryToken) {
            $res['registryToken'] = $this->registryToken;
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['services'] = [];
                foreach ($this->services as $key1 => $value1) {
                    $res['services'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['author'])) {
            $model->author = $map['author'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['license'])) {
            $model->license = $map['license'];
        }

        if (isset($map['packageName'])) {
            $model->packageName = $map['packageName'];
        }

        if (isset($map['readme'])) {
            $model->readme = $map['readme'];
        }

        if (isset($map['registryToken'])) {
            $model->registryToken = $map['registryToken'];
        }

        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                foreach ($map['services'] as $key1 => $value1) {
                    $model->services[$key1] = TemplateServiceConfig::fromMap($value1);
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = TemplateParameterSchema::fromMap($value1);
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
