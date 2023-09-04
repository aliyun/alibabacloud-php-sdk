<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserVipsByDomainRequest extends Model
{
    /**
     * @description Specifies whether to query the virtual IP addresses of only healthy CDN POPs. Valid values:
     *
     *   **on**: healthy CDN edge nodes.
     *   **off**: all CDN edge nodes.
     *
     * @example on
     *
     * @var string
     */
    public $available;

    /**
     * @description The accelerated domain name. You can specify only one domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'available'  => 'Available',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserVipsByDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
