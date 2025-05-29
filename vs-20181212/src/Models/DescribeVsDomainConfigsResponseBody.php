<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponseBody\domainConfigs;

class DescribeVsDomainConfigsResponseBody extends Model
{
    /**
     * @var domainConfigs[]
     */
    public $domainConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainConfigs)) {
            Model::validateArray($this->domainConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainConfigs) {
            if (\is_array($this->domainConfigs)) {
                $res['DomainConfigs'] = [];
                $n1 = 0;
                foreach ($this->domainConfigs as $item1) {
                    $res['DomainConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainConfigs'])) {
            if (!empty($map['DomainConfigs'])) {
                $model->domainConfigs = [];
                $n1 = 0;
                foreach ($map['DomainConfigs'] as $item1) {
                    $model->domainConfigs[$n1++] = domainConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
