<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForResourceServerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForResourceServerResponseBody\organizationalUnits\resourceServerScopes;

class organizationalUnits extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @var resourceServerScopes[]
     */
    public $resourceServerScopes;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'organizationalUnitId' => 'OrganizationalUnitId',
        'resourceServerScopes' => 'ResourceServerScopes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceServerScopes)) {
            Model::validateArray($this->resourceServerScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }

        if (null !== $this->resourceServerScopes) {
            if (\is_array($this->resourceServerScopes)) {
                $res['ResourceServerScopes'] = [];
                $n1 = 0;
                foreach ($this->resourceServerScopes as $item1) {
                    $res['ResourceServerScopes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }

        if (isset($map['ResourceServerScopes'])) {
            if (!empty($map['ResourceServerScopes'])) {
                $model->resourceServerScopes = [];
                $n1 = 0;
                foreach ($map['ResourceServerScopes'] as $item1) {
                    $model->resourceServerScopes[$n1] = resourceServerScopes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
