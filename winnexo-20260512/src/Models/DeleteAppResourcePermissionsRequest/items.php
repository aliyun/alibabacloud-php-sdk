<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteAppResourcePermissionsRequest;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string[]
     */
    public $granteeIds;

    /**
     * @var string
     */
    public $granteeTenantId;

    /**
     * @var string
     */
    public $granteeType;

    /**
     * @var bool
     */
    public $includeDescendants;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'granteeIds' => 'granteeIds',
        'granteeTenantId' => 'granteeTenantId',
        'granteeType' => 'granteeType',
        'includeDescendants' => 'includeDescendants',
        'resourceKey' => 'resourceKey',
        'resourceType' => 'resourceType',
        'scope' => 'scope',
    ];

    public function validate()
    {
        if (\is_array($this->granteeIds)) {
            Model::validateArray($this->granteeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granteeIds) {
            if (\is_array($this->granteeIds)) {
                $res['granteeIds'] = [];
                $n1 = 0;
                foreach ($this->granteeIds as $item1) {
                    $res['granteeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->granteeTenantId) {
            $res['granteeTenantId'] = $this->granteeTenantId;
        }

        if (null !== $this->granteeType) {
            $res['granteeType'] = $this->granteeType;
        }

        if (null !== $this->includeDescendants) {
            $res['includeDescendants'] = $this->includeDescendants;
        }

        if (null !== $this->resourceKey) {
            $res['resourceKey'] = $this->resourceKey;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (isset($map['granteeIds'])) {
            if (!empty($map['granteeIds'])) {
                $model->granteeIds = [];
                $n1 = 0;
                foreach ($map['granteeIds'] as $item1) {
                    $model->granteeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['granteeTenantId'])) {
            $model->granteeTenantId = $map['granteeTenantId'];
        }

        if (isset($map['granteeType'])) {
            $model->granteeType = $map['granteeType'];
        }

        if (isset($map['includeDescendants'])) {
            $model->includeDescendants = $map['includeDescendants'];
        }

        if (isset($map['resourceKey'])) {
            $model->resourceKey = $map['resourceKey'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
