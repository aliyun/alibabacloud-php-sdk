<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayRouteDomainInfo\domains;
use AlibabaCloud\Tea\Model;

class GatewayRouteDomainInfo extends Model
{
    /**
     * @var domains[]
     */
    public $domains;
    protected $_name = [
        'domains' => 'domains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayRouteDomainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domains'])) {
            if (!empty($map['domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
