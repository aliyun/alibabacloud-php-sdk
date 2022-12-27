<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\requestPerInterval;

use AlibabaCloud\Tea\Model;

class requestDataModule extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1128
     *
     * @var int
     */
    public $request;

    /**
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
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
