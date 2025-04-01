<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class tenantCreatable extends Model
{
    /**
     * @var string
     */
    public $disableCreateTenantReason;

    /**
     * @var bool
     */
    public $enableCreateTenant;
    protected $_name = [
        'disableCreateTenantReason' => 'DisableCreateTenantReason',
        'enableCreateTenant' => 'EnableCreateTenant',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableCreateTenantReason) {
            $res['DisableCreateTenantReason'] = $this->disableCreateTenantReason;
        }

        if (null !== $this->enableCreateTenant) {
            $res['EnableCreateTenant'] = $this->enableCreateTenant;
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
        if (isset($map['DisableCreateTenantReason'])) {
            $model->disableCreateTenantReason = $map['DisableCreateTenantReason'];
        }

        if (isset($map['EnableCreateTenant'])) {
            $model->enableCreateTenant = $map['EnableCreateTenant'];
        }

        return $model;
    }
}
