<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\requestPerInterval;

use AlibabaCloud\Tea\Model;

class requestDataModule extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 11288111
     *
     * @var int
     */
    public $request;

    /**
     * @description The type of data returned. Valid values:
     *
     * - **StaticHttps**: the number of HTTPS requests for static content.
     * - **DynamicHttps**: the number of HTTPS requests for dynamic content.
     * - **DynamicHttp**: the number of HTTP requests for dynamic content.
     * - **StaticQuic**: the number of QUIC requests for static content.
     * - **DynamicQuic**: the number of QUIC requests for dynamic content.
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The statistics about data transfer collected every 5 minutes.
     *
     * @example Simple
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domain'    => 'Domain',
        'request'   => 'Request',
        'timeStamp' => 'TimeStamp',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
