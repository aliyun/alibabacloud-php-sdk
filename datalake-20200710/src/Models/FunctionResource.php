<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class FunctionResource extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example default
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'functionName' => 'FunctionName',
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
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FunctionResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
