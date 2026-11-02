<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\ListPxfsTenantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ListPxfsTenantsResponseBody\data\tenants;

class data extends Model
{
    /**
     * @var tenants[]
     */
    public $tenants;
    protected $_name = [
        'tenants' => 'Tenants',
    ];

    public function validate()
    {
        if (\is_array($this->tenants)) {
            Model::validateArray($this->tenants);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenants) {
            if (\is_array($this->tenants)) {
                $res['Tenants'] = [];
                $n1 = 0;
                foreach ($this->tenants as $item1) {
                    $res['Tenants'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Tenants'])) {
            if (!empty($map['Tenants'])) {
                $model->tenants = [];
                $n1 = 0;
                foreach ($map['Tenants'] as $item1) {
                    $model->tenants[$n1] = tenants::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
