<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class GetPidOrganizationParentIdsRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
        Model::validateRequired('organizationId', $this->organizationId, true);
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
     * @return GetPidOrganizationParentIdsRequest
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
