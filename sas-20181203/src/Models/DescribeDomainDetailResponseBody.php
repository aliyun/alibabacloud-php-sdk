<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponseBody\domainDetailItems;
use AlibabaCloud\Tea\Model;

class DescribeDomainDetailResponseBody extends Model
{
    /**
     * @description 1.2.XX.XX
     *
     * @example 2
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description The total number of alerts in your website assets.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description DescribeDomainDetail
     *
     * @var domainDetailItems[]
     */
    public $domainDetailItems;

    /**
     * @description The instance UUID of the domain asset.
     *
     * @example 3A85CFCF-05C8-451A-9E41-C0D5E96BA407
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Queries the details of domain assets within your Alibaba Cloud account.
     *
     * @example example.com
     *
     * @var string
     */
    public $rootDomain;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 2
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount'        => 'AlarmCount',
        'domain'            => 'Domain',
        'domainDetailItems' => 'DomainDetailItems',
        'requestId'         => 'RequestId',
        'rootDomain'        => 'RootDomain',
        'vulCount'          => 'VulCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainDetailItems) {
            $res['DomainDetailItems'] = [];
            if (null !== $this->domainDetailItems && \is_array($this->domainDetailItems)) {
                $n = 0;
                foreach ($this->domainDetailItems as $item) {
                    $res['DomainDetailItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootDomain) {
            $res['RootDomain'] = $this->rootDomain;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainDetailItems'])) {
            if (!empty($map['DomainDetailItems'])) {
                $model->domainDetailItems = [];
                $n                        = 0;
                foreach ($map['DomainDetailItems'] as $item) {
                    $model->domainDetailItems[$n++] = null !== $item ? domainDetailItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootDomain'])) {
            $model->rootDomain = $map['RootDomain'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
