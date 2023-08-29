<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DatabaseResource extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $databaseWildcard;
    protected $_name = [
        'databaseName'     => 'DatabaseName',
        'databaseWildcard' => 'DatabaseWildcard',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databaseWildcard) {
            $res['DatabaseWildcard'] = $this->databaseWildcard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatabaseResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabaseWildcard'])) {
            $model->databaseWildcard = $map['DatabaseWildcard'];
        }

        return $model;
    }
}
