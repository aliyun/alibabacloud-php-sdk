<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetApiMcpServerResponseBody;

use AlibabaCloud\Dara\Model;

class terraformTools extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destroyPolicy;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'async' => 'async',
        'code' => 'code',
        'description' => 'description',
        'destroyPolicy' => 'destroyPolicy',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['async'] = $this->async;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->destroyPolicy) {
            $res['destroyPolicy'] = $this->destroyPolicy;
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
        if (isset($map['async'])) {
            $model->async = $map['async'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['destroyPolicy'])) {
            $model->destroyPolicy = $map['destroyPolicy'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
