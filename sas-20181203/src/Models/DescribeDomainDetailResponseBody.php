<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponseBody\domainDetailItems;
use AlibabaCloud\Tea\Model;

class DescribeDomainDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $alarmCount;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var domainDetailItems[]
     */
    public $domainDetailItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rootDomain;

    /**
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
