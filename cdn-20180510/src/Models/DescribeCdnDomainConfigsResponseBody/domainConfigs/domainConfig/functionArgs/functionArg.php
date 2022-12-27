<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs;

use AlibabaCloud\Tea\Model;

class functionArg extends Model
{
    /**
     * @description The parameter name, which is the configuration item of **functionName**. You can configure multiple configuration items.
     *
     * @example auth_type
     *
     * @var string
     */
    public $argName;

    /**
     * @description The parameter value, which is the value of the configuration item of **functionName**.
     *
     * @example req_auth
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
     * @return functionArg
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
