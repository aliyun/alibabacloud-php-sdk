<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;
use AlibabaCloud\Tea\Model;

class DescribeDBInitializeVariableResponseBody extends Model
{
    /**
     * @var variables
     */
    public $variables;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBType;
    protected $_name = [
        'variables' => 'Variables',
        'DBVersion' => 'DBVersion',
        'requestId' => 'RequestId',
        'DBType'    => 'DBType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variables) {
            $res['Variables'] = null !== $this->variables ? $this->variables->toMap() : null;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
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
        if (isset($map['Variables'])) {
            $model->variables = variables::fromMap($map['Variables']);
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        return $model;
    }
}
