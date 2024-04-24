<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgRunSensIdentifyRequest\esMetaParams;
use AlibabaCloud\Tea\Model;

class DsgRunSensIdentifyRequest extends Model
{
    /**
     * @var esMetaParams[]
     */
    public $esMetaParams;

    /**
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'esMetaParams' => 'EsMetaParams',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esMetaParams) {
            $res['EsMetaParams'] = [];
            if (null !== $this->esMetaParams && \is_array($this->esMetaParams)) {
                $n = 0;
                foreach ($this->esMetaParams as $item) {
                    $res['EsMetaParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgRunSensIdentifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EsMetaParams'])) {
            if (!empty($map['EsMetaParams'])) {
                $model->esMetaParams = [];
                $n                   = 0;
                foreach ($map['EsMetaParams'] as $item) {
                    $model->esMetaParams[$n++] = null !== $item ? esMetaParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
