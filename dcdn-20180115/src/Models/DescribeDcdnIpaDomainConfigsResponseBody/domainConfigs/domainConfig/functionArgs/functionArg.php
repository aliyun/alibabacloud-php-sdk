<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs;

use AlibabaCloud\Tea\Model;

class functionArg extends Model
{
    /**
     * @example file_type
     *
     * @var string
     */
    public $argName;

    /**
     * @example txt
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
