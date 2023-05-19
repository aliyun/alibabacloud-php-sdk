<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainStagingConfigResponseBody\domainConfigs;

use AlibabaCloud\Tea\Model;

class functionArgs extends Model
{
    /**
     * @description The value of the configuration.
     *
     * @example auth_type
     *
     * @var string
     */
    public $argName;

    /**
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
