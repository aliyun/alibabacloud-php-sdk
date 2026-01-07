<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponseBody\organizationalUnits\applicationRoles;

class organizationalUnits extends Model
{
    /**
     * @var applicationRoles[]
     */
    public $applicationRoles;

    /**
     * @var string
     */
    public $organizationalUnitId;
    protected $_name = [
        'applicationRoles' => 'ApplicationRoles',
        'organizationalUnitId' => 'OrganizationalUnitId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationRoles)) {
            Model::validateArray($this->applicationRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationRoles) {
            if (\is_array($this->applicationRoles)) {
                $res['ApplicationRoles'] = [];
                $n1 = 0;
                foreach ($this->applicationRoles as $item1) {
                    $res['ApplicationRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
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
        if (isset($map['ApplicationRoles'])) {
            if (!empty($map['ApplicationRoles'])) {
                $model->applicationRoles = [];
                $n1 = 0;
                foreach ($map['ApplicationRoles'] as $item1) {
                    $model->applicationRoles[$n1] = applicationRoles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }

        return $model;
    }
}
