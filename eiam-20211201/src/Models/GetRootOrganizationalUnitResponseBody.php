<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitResponseBody\organizationalUnit;
use AlibabaCloud\Tea\Model;

class GetRootOrganizationalUnitResponseBody extends Model
{
    /**
     * @description The data object of the organizational unit.
     *
     * @var organizationalUnit
     */
    public $organizationalUnit;

    /**
     * @description The ID of the request.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'organizationalUnit' => 'OrganizationalUnit',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnit) {
            $res['OrganizationalUnit'] = null !== $this->organizationalUnit ? $this->organizationalUnit->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRootOrganizationalUnitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationalUnit'])) {
            $model->organizationalUnit = organizationalUnit::fromMap($map['OrganizationalUnit']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
