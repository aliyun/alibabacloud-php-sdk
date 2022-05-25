<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetOrganizationalUnitIdByExternalIdRequest extends Model
{
    /**
     * @description 机构外部ID
     *
     * @var string
     */
    public $organizationalUnitExternalId;
    protected $_name = [
        'organizationalUnitExternalId' => 'organizationalUnitExternalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitExternalId) {
            $res['organizationalUnitExternalId'] = $this->organizationalUnitExternalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrganizationalUnitIdByExternalIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationalUnitExternalId'])) {
            $model->organizationalUnitExternalId = $map['organizationalUnitExternalId'];
        }

        return $model;
    }
}
