<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class CreateOrganizationalUnitResponseBody extends Model
{
    /**
     * @description The ID of the organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitId;
    protected $_name = [
        'organizationalUnitId' => 'organizationalUnitId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitId) {
            $res['organizationalUnitId'] = $this->organizationalUnitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrganizationalUnitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationalUnitId'])) {
            $model->organizationalUnitId = $map['organizationalUnitId'];
        }

        return $model;
    }
}
