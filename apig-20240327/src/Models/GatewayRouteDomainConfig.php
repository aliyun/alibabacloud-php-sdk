<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GatewayRouteDomainConfig extends Model
{
    /**
     * @var string[]
     */
    public $domainIds;
    protected $_name = [
        'domainIds' => 'domainIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainIds) {
            $res['domainIds'] = $this->domainIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayRouteDomainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = $map['domainIds'];
            }
        }

        return $model;
    }
}
