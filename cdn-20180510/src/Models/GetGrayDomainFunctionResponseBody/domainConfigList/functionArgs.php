<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\GetGrayDomainFunctionResponseBody\domainConfigList;

use AlibabaCloud\Tea\Model;

class functionArgs extends Model
{
    /**
     * @example auth_type
     *
     * @var string
     */
    public $argName;

    /**
     * @example req
     *
     * @var string
     */
    public $argValue;
    protected $_name = [
        'argName'  => 'ArgName',
        'argValue' => 'ArgValue',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionArgs
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

        return $model;
    }
}
