<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\AckConfig;

use AlibabaCloud\Dara\Model;

class volumeMounts extends Model
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
        'name' => 'Name',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
