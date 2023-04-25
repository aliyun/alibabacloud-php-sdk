<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnL2VipsResponseBody extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the request.
     *
     * @example 820E7900-5CA9-4AEF-B0DD-20ED5F64BE55
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The virtual IP addresses (VIPs).
     *
     * @var string[]
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
            $res['Vips'] = $this->vips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnL2VipsResponseBody
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
            if (!empty($map['Vips'])) {
                $model->vips = $map['Vips'];
            }
        }

        return $model;
    }
}
