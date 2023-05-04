<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserVipsByDomainResponseBody\vips;
use AlibabaCloud\Tea\Model;

class DescribeUserVipsByDomainResponseBody extends Model
{
    /**
     * @description >  The maximum number of times that each user can call this operation per second is 30.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description A list of virtual IP addresses.
     *
     * @example 820E7900-5CA9-4AEF-B0DD-20ED5F64BE55
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The accelerated domain name. You can specify only one domain name.
     *
     * @var vips
     */
    public $vips;
    protected $_name = [
        'domainName' => 'DomainName',
        'requestId'  => 'RequestId',
        'vips'       => 'Vips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vips) {
            $res['Vips'] = null !== $this->vips ? $this->vips->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserVipsByDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Vips'])) {
            $model->vips = vips::fromMap($map['Vips']);
        }

        return $model;
    }
}
