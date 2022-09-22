<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\ListAccountEcsQuotasResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ListAccountEcsQuotasResponseBody\ecsQuotas\ecsQuota;
use AlibabaCloud\Tea\Model;

class ecsQuotas extends Model
{
    /**
     * @var ecsQuota[]
     */
    public $ecsQuota;
    protected $_name = [
        'ecsQuota' => 'EcsQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsQuota) {
            $res['EcsQuota'] = [];
            if (null !== $this->ecsQuota && \is_array($this->ecsQuota)) {
                $n = 0;
                foreach ($this->ecsQuota as $item) {
                    $res['EcsQuota'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsQuotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsQuota'])) {
            if (!empty($map['EcsQuota'])) {
                $model->ecsQuota = [];
                $n               = 0;
                foreach ($map['EcsQuota'] as $item) {
                    $model->ecsQuota[$n++] = null !== $item ? ecsQuota::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
