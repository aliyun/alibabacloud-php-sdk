<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateSqlInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var bool
     */
    public $useAsDefault;
    protected $_name = [
        'cu' => 'cu',
        'useAsDefault' => 'useAsDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->useAsDefault) {
            $res['useAsDefault'] = $this->useAsDefault;
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
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['useAsDefault'])) {
            $model->useAsDefault = $map['useAsDefault'];
        }

        return $model;
    }
}
