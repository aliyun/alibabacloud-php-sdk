<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\PreviewLogicalModelUpdateResponseBody\data;

use AlibabaCloud\Dara\Model;

class apis extends Model
{
    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string[]
     */
    public $errors;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $revision;
    protected $_name = [
        'configuration' => 'configuration',
        'environmentId' => 'environmentId',
        'errors' => 'errors',
        'httpApiId' => 'httpApiId',
        'name' => 'name',
        'revision' => 'revision',
    ];

    public function validate()
    {
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = $this->configuration;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['errors'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
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
        if (isset($map['configuration'])) {
            $model->configuration = $map['configuration'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['errors'])) {
            if (!empty($map['errors'])) {
                $model->errors = [];
                $n1 = 0;
                foreach ($map['errors'] as $item1) {
                    $model->errors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        return $model;
    }
}
