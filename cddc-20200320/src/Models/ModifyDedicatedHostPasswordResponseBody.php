<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostPasswordResponseBody extends Model
{
    /**
     * @description The name of the host.
     *
     * @example test123****
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The request ID.
     *
     * @example D6E068C3-25BC-455A-85FE-45F0B22E12AS
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostName' => 'DedicatedHostName',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostPasswordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
