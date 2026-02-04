<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderAuthnConfigurationRequest;

use AlibabaCloud\Dara\Model;

class autoCreateUserConfig extends Model
{
    /**
     * @var string
     */
    public $autoCreateUserStatus;

    /**
     * @var string[]
     */
    public $targetOrganizationalUnitIds;
    protected $_name = [
        'autoCreateUserStatus' => 'AutoCreateUserStatus',
        'targetOrganizationalUnitIds' => 'TargetOrganizationalUnitIds',
    ];

    public function validate()
    {
        if (\is_array($this->targetOrganizationalUnitIds)) {
            Model::validateArray($this->targetOrganizationalUnitIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateUserStatus) {
            $res['AutoCreateUserStatus'] = $this->autoCreateUserStatus;
        }

        if (null !== $this->targetOrganizationalUnitIds) {
            if (\is_array($this->targetOrganizationalUnitIds)) {
                $res['TargetOrganizationalUnitIds'] = [];
                $n1 = 0;
                foreach ($this->targetOrganizationalUnitIds as $item1) {
                    $res['TargetOrganizationalUnitIds'][$n1] = $item1;
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
        if (isset($map['AutoCreateUserStatus'])) {
            $model->autoCreateUserStatus = $map['AutoCreateUserStatus'];
        }

        if (isset($map['TargetOrganizationalUnitIds'])) {
            if (!empty($map['TargetOrganizationalUnitIds'])) {
                $model->targetOrganizationalUnitIds = [];
                $n1 = 0;
                foreach ($map['TargetOrganizationalUnitIds'] as $item1) {
                    $model->targetOrganizationalUnitIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
