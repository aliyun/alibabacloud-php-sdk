<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ServiceCommandStep extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $run;
    protected $_name = [
        'path' => 'path',
        'run' => 'run',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->run) {
            $res['run'] = $this->run;
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
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['run'])) {
            $model->run = $map['run'];
        }

        return $model;
    }
}
