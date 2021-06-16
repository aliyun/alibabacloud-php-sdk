<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @var string
     */
    public $argValue;

    /**
     * @var string
     */
    public $argName;

    /**
     * @var string
     */
    public $functionName;
    protected $_name = [
        'argValue'     => 'ArgValue',
        'argName'      => 'ArgName',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argValue) {
            $res['ArgValue'] = $this->argValue;
        }
        if (null !== $this->argName) {
            $res['ArgName'] = $this->argName;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgValue'])) {
            $model->argValue = $map['ArgValue'];
        }
        if (isset($map['ArgName'])) {
            $model->argName = $map['ArgName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
