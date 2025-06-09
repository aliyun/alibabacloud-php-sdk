<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class DeleteProjectRequest extends Model
{
    /**
     * @var bool
     */
    public $forceDelete;
    protected $_name = [
        'forceDelete' => 'forceDelete',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forceDelete) {
            $res['forceDelete'] = $this->forceDelete;
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
        if (isset($map['forceDelete'])) {
            $model->forceDelete = $map['forceDelete'];
        }

        return $model;
    }
}
