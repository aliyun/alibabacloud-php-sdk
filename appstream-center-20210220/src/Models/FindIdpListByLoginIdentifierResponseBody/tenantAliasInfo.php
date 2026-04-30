<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody;

use AlibabaCloud\Dara\Model;

class tenantAliasInfo extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var bool
     */
    public $preferVpcAccess;

    /**
     * @var string
     */
    public $tenantAlias;

    /**
     * @var string
     */
    public $vpcAccessAddress;
    protected $_name = [
        'accessType' => 'AccessType',
        'preferVpcAccess' => 'PreferVpcAccess',
        'tenantAlias' => 'TenantAlias',
        'vpcAccessAddress' => 'VpcAccessAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->preferVpcAccess) {
            $res['PreferVpcAccess'] = $this->preferVpcAccess;
        }

        if (null !== $this->tenantAlias) {
            $res['TenantAlias'] = $this->tenantAlias;
        }

        if (null !== $this->vpcAccessAddress) {
            $res['VpcAccessAddress'] = $this->vpcAccessAddress;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['PreferVpcAccess'])) {
            $model->preferVpcAccess = $map['PreferVpcAccess'];
        }

        if (isset($map['TenantAlias'])) {
            $model->tenantAlias = $map['TenantAlias'];
        }

        if (isset($map['VpcAccessAddress'])) {
            $model->vpcAccessAddress = $map['VpcAccessAddress'];
        }

        return $model;
    }
}
