<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateConnectionRequest\models;

class UpdateConnectionRequest extends Model
{
    /**
     * @var string[]
     */
    public $configs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string[]
     */
    public $secrets;
    protected $_name = [
        'configs' => 'Configs',
        'description' => 'Description',
        'models' => 'Models',
        'secrets' => 'Secrets',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                foreach ($this->configs as $key1 => $value1) {
                    $res['Configs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['Models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['Models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                foreach ($this->secrets as $key1 => $value1) {
                    $res['Secrets'][$key1] = $value1;
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                foreach ($map['Configs'] as $key1 => $value1) {
                    $model->configs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Models'])) {
            if (!empty($map['Models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['Models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                foreach ($map['Secrets'] as $key1 => $value1) {
                    $model->secrets[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
