<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainUsedPortsResponseBody extends Model
{
    /**
     * @example D7861F61-5B61-*-A47C-*
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int[]
     */
    public $usedPorts;
    protected $_name = [
        'requestId' => 'RequestId',
        'usedPorts' => 'UsedPorts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usedPorts) {
            $res['UsedPorts'] = $this->usedPorts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainUsedPortsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsedPorts'])) {
            if (!empty($map['UsedPorts'])) {
                $model->usedPorts = $map['UsedPorts'];
            }
        }

        return $model;
    }
}
