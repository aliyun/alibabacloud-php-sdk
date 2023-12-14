<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAggregateFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The aggregate function.
     *
     * @example count
     *
     * @var string
     */
    public $function;

    /**
     * @description The display name of the aggregate function.
     *
     * @example Count
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'function'     => 'Function',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
