<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricOrganizationMembersRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @example peers-aaaaaa2-1eqnj5o5w****
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'location'       => 'Location',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricOrganizationMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
