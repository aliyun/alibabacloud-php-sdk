<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\requestPerInterval;

use AlibabaCloud\Tea\Model;

class requestDataModule extends Model
{
    /**
     * @description DescribeDomainMultiUsageData
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 11288111
     *
     * @var int
     */
    public $request;

    /**
     * @description Queries the amount of data transfer and the number of requests for one or more accelerated domain names at a time. Data is collected every 5 minutes.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The information about the accelerated domain name.
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
