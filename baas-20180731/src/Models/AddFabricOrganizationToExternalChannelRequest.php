<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AddFabricOrganizationToExternalChannelRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $joinResponse;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'joinResponse'   => 'JoinResponse',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinResponse) {
            $res['JoinResponse'] = $this->joinResponse;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFabricOrganizationToExternalChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinResponse'])) {
            $model->joinResponse = $map['JoinResponse'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
