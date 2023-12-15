<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudIntegrationServiceTokenRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'service'        => 'Service',
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
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudIntegrationServiceTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
