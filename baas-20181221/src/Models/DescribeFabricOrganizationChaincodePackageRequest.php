<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricOrganizationChaincodePackageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricOrganizationChaincodePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
