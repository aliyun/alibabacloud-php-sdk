<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;

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
        if (null !== $this->variables) {
            $this->variables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Variables'] = null !== $this->variables ? $this->variables->toArray($noStream) : $this->variables;
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
