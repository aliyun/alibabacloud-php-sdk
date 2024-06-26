<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateFabricChaincodePackageRequest extends Model
{
    /**
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'location'       => 'Location',
        'organizationId' => 'OrganizationId',
        'ossBucket'      => 'OssBucket',
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
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
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
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
