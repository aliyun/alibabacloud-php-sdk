<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreatePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $className;
    /**
     * @var string
     */
    public $config;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'className'   => 'className',
        'config'      => 'config',
        'description' => 'description',
        'name'        => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
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
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
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
