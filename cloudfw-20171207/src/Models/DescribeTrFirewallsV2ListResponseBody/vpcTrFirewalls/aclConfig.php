<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls;

use AlibabaCloud\Tea\Model;

class aclConfig extends Model
{
    /**
     * @description Whether to enable strict mode
     * - 1: Enable strict mode
     * - 0: Disable strict mode
     *
     * @example 1
     *
     * @var int
     */
    public $strictMode;
    protected $_name = [
        'strictMode' => 'StrictMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }

        return $model;
    }
}
