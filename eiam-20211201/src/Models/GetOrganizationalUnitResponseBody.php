<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetOrganizationalUnitResponseBody\organizationalUnit;

class GetOrganizationalUnitResponseBody extends Model
{
    /**
     * @var organizationalUnit
     */
    public $organizationalUnit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'organizationalUnit' => 'OrganizationalUnit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->organizationalUnit) {
            $this->organizationalUnit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationalUnit) {
            $res['OrganizationalUnit'] = null !== $this->organizationalUnit ? $this->organizationalUnit->toArray($noStream) : $this->organizationalUnit;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
