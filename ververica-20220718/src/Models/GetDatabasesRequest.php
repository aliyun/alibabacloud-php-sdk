<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class GetDatabasesRequest extends Model
{
    /**
     * @var string
     */
    public $databaseName;
    protected $_name = [
        'databaseName' => 'databaseName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
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
        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        return $model;
    }
}
