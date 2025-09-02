<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgRunSensIdentifyRequest\esMetaParams;

class DsgRunSensIdentifyRequest extends Model
{
    /**
     * @var esMetaParams[]
     */
    public $esMetaParams;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'esMetaParams' => 'EsMetaParams',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->esMetaParams)) {
            Model::validateArray($this->esMetaParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->esMetaParams) {
            if (\is_array($this->esMetaParams)) {
                $res['EsMetaParams'] = [];
                $n1 = 0;
                foreach ($this->esMetaParams as $item1) {
                    $res['EsMetaParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EsMetaParams'])) {
            if (!empty($map['EsMetaParams'])) {
                $model->esMetaParams = [];
                $n1 = 0;
                foreach ($map['EsMetaParams'] as $item1) {
                    $model->esMetaParams[$n1] = esMetaParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
