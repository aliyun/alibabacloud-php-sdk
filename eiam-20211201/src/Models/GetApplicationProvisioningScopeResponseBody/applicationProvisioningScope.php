<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponseBody;

use AlibabaCloud\Tea\Model;

class applicationProvisioningScope extends Model
{
    /**
     * @description The list of organizational units that are authorized for account synchronization.
     *
     * @var string[]
     */
    public $organizationalUnitIds;
    protected $_name = [
        'organizationalUnitIds' => 'OrganizationalUnitIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitIds) {
            $res['OrganizationalUnitIds'] = $this->organizationalUnitIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationProvisioningScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = $map['OrganizationalUnitIds'];
            }
        }

        return $model;
    }
}
