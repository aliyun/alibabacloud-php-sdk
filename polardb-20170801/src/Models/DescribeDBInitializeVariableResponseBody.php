<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;
use AlibabaCloud\Tea\Model;

class DescribeDBInitializeVariableResponseBody extends Model
{
    /**
     * @description The type of the database engine. Valid values:
     *
     *   Oracle
     *   PostgreSQL
     *
     * @example PostgreSQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine.
     *
     * @example 11
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The ID of the request.
     *
     * @example 475F58B7-F394-4394-AA6E-4F1CBA******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The attributes that are returned.
     *
     * @var variables
     */
    public $variables;
    protected $_name = [
        'DBType'    => 'DBType',
        'DBVersion' => 'DBVersion',
        'requestId' => 'RequestId',
        'variables' => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->variables) {
            $res['Variables'] = null !== $this->variables ? $this->variables->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInitializeVariableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Variables'])) {
            $model->variables = variables::fromMap($map['Variables']);
        }

        return $model;
    }
}
