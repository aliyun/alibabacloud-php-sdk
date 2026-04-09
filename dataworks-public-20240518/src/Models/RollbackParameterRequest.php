<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RollbackParameterRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $rollbackVersion;
    protected $_name = [
        'id' => 'Id',
        'rollbackVersion' => 'RollbackVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->rollbackVersion) {
            $res['RollbackVersion'] = $this->rollbackVersion;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RollbackVersion'])) {
            $model->rollbackVersion = $map['RollbackVersion'];
        }

        return $model;
    }
}
