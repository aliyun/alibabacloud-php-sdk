<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class InstallFabricChaincodePackageRequest extends Model
{
    /**
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'chaincodePackageId' => 'ChaincodePackageId',
        'location'           => 'Location',
        'organizationId'     => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodePackageId) {
            $res['ChaincodePackageId'] = $this->chaincodePackageId;
        }
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
     * @return InstallFabricChaincodePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
