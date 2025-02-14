<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponseBody;

use AlibabaCloud\Dara\Model;

class applicationProvisioningScope extends Model
{
    /**
     * @var string[]
     */
    public $groupIds;
    /**
     * @var int
     */
    public $maxQuota;
    /**
     * @var string[]
     */
    public $organizationalUnitIds;
    /**
     * @var int
     */
    public $usedQuota;
    protected $_name = [
        'groupIds'              => 'GroupIds',
        'maxQuota'              => 'MaxQuota',
        'organizationalUnitIds' => 'OrganizationalUnitIds',
        'usedQuota'             => 'UsedQuota',
    ];

    public function validate()
    {
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        if (\is_array($this->organizationalUnitIds)) {
            Model::validateArray($this->organizationalUnitIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1              = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxQuota) {
            $res['MaxQuota'] = $this->maxQuota;
        }

        if (null !== $this->organizationalUnitIds) {
            if (\is_array($this->organizationalUnitIds)) {
                $res['OrganizationalUnitIds'] = [];
                $n1                           = 0;
                foreach ($this->organizationalUnitIds as $item1) {
                    $res['OrganizationalUnitIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
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
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1              = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxQuota'])) {
            $model->maxQuota = $map['MaxQuota'];
        }

        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = [];
                $n1                           = 0;
                foreach ($map['OrganizationalUnitIds'] as $item1) {
                    $model->organizationalUnitIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }

        return $model;
    }
}
