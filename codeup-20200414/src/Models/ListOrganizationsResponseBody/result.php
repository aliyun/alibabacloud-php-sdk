<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $organizationRole;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'organizationRole' => 'OrganizationRole',
        'accessLevel'      => 'AccessLevel',
        'organizationName' => 'OrganizationName',
        'organizationId'   => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationRole) {
            $res['OrganizationRole'] = $this->organizationRole;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationRole'])) {
            $model->organizationRole = $map['OrganizationRole'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
