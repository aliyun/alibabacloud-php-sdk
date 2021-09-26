<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponseBody\data\apis\wizardDetails;

use AlibabaCloud\Tea\Model;

class wizardConnection extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $connectionId;
    protected $_name = [
        'tableName'    => 'TableName',
        'connectionId' => 'ConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wizardConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        return $model;
    }
}
