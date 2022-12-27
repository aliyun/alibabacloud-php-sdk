<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet;
use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressesResponseBody extends Model
{
    /**
     * @var assignedPrivateIpAddressesSet
     */
    public $assignedPrivateIpAddressesSet;

    /**
     * @description Id of the request
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assignedPrivateIpAddressesSet' => 'AssignedPrivateIpAddressesSet',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedPrivateIpAddressesSet) {
            $res['AssignedPrivateIpAddressesSet'] = null !== $this->assignedPrivateIpAddressesSet ? $this->assignedPrivateIpAddressesSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedPrivateIpAddressesSet'])) {
            $model->assignedPrivateIpAddressesSet = assignedPrivateIpAddressesSet::fromMap($map['AssignedPrivateIpAddressesSet']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
