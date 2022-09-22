<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserAvailableIpServiceProvidersResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserAvailableIpServiceProvidersResponseBody\ipServiceProviders\ipServiceProvider;
use AlibabaCloud\Tea\Model;

class ipServiceProviders extends Model
{
    /**
     * @var ipServiceProvider[]
     */
    public $ipServiceProvider;
    protected $_name = [
        'ipServiceProvider' => 'IpServiceProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipServiceProvider) {
            $res['IpServiceProvider'] = [];
            if (null !== $this->ipServiceProvider && \is_array($this->ipServiceProvider)) {
                $n = 0;
                foreach ($this->ipServiceProvider as $item) {
                    $res['IpServiceProvider'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipServiceProviders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpServiceProvider'])) {
            if (!empty($map['IpServiceProvider'])) {
                $model->ipServiceProvider = [];
                $n                        = 0;
                foreach ($map['IpServiceProvider'] as $item) {
                    $model->ipServiceProvider[$n++] = null !== $item ? ipServiceProvider::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
