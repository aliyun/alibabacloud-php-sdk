<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DeleteRoutineCodeVersionRequest extends Model
{
    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'codeVersion' => 'CodeVersion',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
