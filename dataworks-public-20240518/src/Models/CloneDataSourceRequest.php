<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CloneDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $cloneDataSourceName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'cloneDataSourceName' => 'CloneDataSourceName',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloneDataSourceName) {
            $res['CloneDataSourceName'] = $this->cloneDataSourceName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['CloneDataSourceName'])) {
            $model->cloneDataSourceName = $map['CloneDataSourceName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
