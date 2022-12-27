<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @example allow_function
     *
     * @var string
     */
    public $argName;

    /**
     * @example {\"dcdn_allow\":[\"cc_rule\",\"ddos_dispatch\"]}
     *
     * @var string
     */
    public $argValue;

    /**
     * @example domain_business_control
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'argName'      => 'ArgName',
        'argValue'     => 'ArgValue',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return configs
     */
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
