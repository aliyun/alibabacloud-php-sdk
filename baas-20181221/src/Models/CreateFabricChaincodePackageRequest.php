<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateFabricChaincodePackageRequest extends Model
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
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz
     *
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'location'       => 'Location',
        'organizationId' => 'OrganizationId',
        'ossUrl'         => 'OssUrl',
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
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFabricChaincodePackageRequest
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
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
