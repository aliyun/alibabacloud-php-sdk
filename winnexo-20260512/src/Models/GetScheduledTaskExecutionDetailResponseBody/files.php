<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponseBody;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'name' => 'name',
        'path' => 'path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
