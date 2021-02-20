<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoResponseBody\supportIpv6Info;
use AlibabaCloud\Tea\Model;

class DescribeEnsRegionIdIpv6InfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportIpv6Info
     */
    public $supportIpv6Info;
    protected $_name = [
        'requestId'       => 'RequestId',
        'supportIpv6Info' => 'SupportIpv6Info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportIpv6Info) {
            $res['SupportIpv6Info'] = null !== $this->supportIpv6Info ? $this->supportIpv6Info->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRegionIdIpv6InfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportIpv6Info'])) {
            $model->supportIpv6Info = supportIpv6Info::fromMap($map['SupportIpv6Info']);
        }

        return $model;
    }
}
