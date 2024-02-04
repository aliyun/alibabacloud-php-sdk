<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs;
use AlibabaCloud\Tea\Model;

class DescribeTenantSecurityConfigsResponseBody extends Model
{
    /**
     * @description The list of parameters.
     *
     * @var configs
     */
    public $configs;

    /**
     * @description The ID of the request.
     *
     * @example 523E7183-****-590D-****-12DFD316614B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configs'   => 'Configs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = null !== $this->configs ? $this->configs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantSecurityConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configs = configs::fromMap($map['Configs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
