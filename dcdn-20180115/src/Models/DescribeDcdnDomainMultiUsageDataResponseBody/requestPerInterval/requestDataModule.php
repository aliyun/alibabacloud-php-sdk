<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\requestPerInterval;

use AlibabaCloud\Tea\Model;

class requestDataModule extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The number of requests.
     *
     * @example 1128
     *
     * @var int
     */
    public $request;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The type of the requests. Valid values: StaticHttps, DynamicHttps, DynamicHttp, StaticQuic, and DynamicQuic.
     *
     * @example DynamicHttp
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
