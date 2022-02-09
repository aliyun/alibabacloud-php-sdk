<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;
use AlibabaCloud\Tea\Model;

class DescribeDBInitializeVariableResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
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
