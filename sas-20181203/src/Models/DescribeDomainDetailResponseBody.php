<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponseBody\domainDetailItems;
use AlibabaCloud\Tea\Model;

class DescribeDomainDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $vulCount;

    /**
     * @var int
     */
    public $alarmCount;

    /**
     * @var string
     */
    public $rootDomain;

    /**
     * @var domainDetailItems[]
     */
    public $domainDetailItems;
    protected $_name = [
        'domain'            => 'Domain',
        'requestId'         => 'RequestId',
        'vulCount'          => 'VulCount',
        'alarmCount'        => 'AlarmCount',
        'rootDomain'        => 'RootDomain',
        'domainDetailItems' => 'DomainDetailItems',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->rootDomain) {
            $res['RootDomain'] = $this->rootDomain;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['RootDomain'])) {
            $model->rootDomain = $map['RootDomain'];
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

        return $model;
    }
}
