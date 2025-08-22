<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
{
    /**
     * @var string
     */
    public $argName;

    /**
     * @var string
     */
    public $argValue;

    /**
     * @var string
     */
    public $functionName;
    protected $_name = [
        'argName' => 'ArgName',
        'argValue' => 'ArgValue',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argName) {
            $res['ArgName'] = $this->argName;
        }

        if (null !== $this->argValue) {
            $res['ArgValue'] = $this->argValue;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
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
        if (isset($map['ArgName'])) {
            $model->argName = $map['ArgName'];
        }

        if (isset($map['ArgValue'])) {
            $model->argValue = $map['ArgValue'];
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
