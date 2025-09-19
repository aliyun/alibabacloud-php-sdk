<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponseBody\domainDetailItems;

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
        'alarmCount' => 'AlarmCount',
        'domain' => 'Domain',
        'domainDetailItems' => 'DomainDetailItems',
        'requestId' => 'RequestId',
        'rootDomain' => 'RootDomain',
        'vulCount' => 'VulCount',
    ];

    public function validate()
    {
        if (\is_array($this->domainDetailItems)) {
            Model::validateArray($this->domainDetailItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainDetailItems) {
            if (\is_array($this->domainDetailItems)) {
                $res['DomainDetailItems'] = [];
                $n1 = 0;
                foreach ($this->domainDetailItems as $item1) {
                    $res['DomainDetailItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DomainDetailItems'] as $item1) {
                    $model->domainDetailItems[$n1] = domainDetailItems::fromMap($item1);
                    ++$n1;
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
