<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\logConfig\sls;
use AlibabaCloud\Tea\Model;

class logConfig extends Model
{
    /**
     * @var sls
     */
    public $sls;
    protected $_name = [
        'sls' => 'sls',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sls) {
            $res['sls'] = null !== $this->sls ? $this->sls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sls'])) {
            $model->sls = sls::fromMap($map['sls']);
        }

        return $model;
    }
}
