<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\wizardDetails;

use AlibabaCloud\Dara\Model;

class wizardConnection extends Model
{
    /**
     * @var int
     */
    public $connectionId;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'connectionId' => 'ConnectionId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
