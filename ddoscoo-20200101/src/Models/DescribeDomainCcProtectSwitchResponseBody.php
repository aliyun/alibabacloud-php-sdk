<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainCcProtectSwitchResponseBody\protectSwitchList;

class DescribeDomainCcProtectSwitchResponseBody extends Model
{
    /**
     * @var protectSwitchList[]
     */
    public $protectSwitchList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'protectSwitchList' => 'ProtectSwitchList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->protectSwitchList)) {
            Model::validateArray($this->protectSwitchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectSwitchList) {
            if (\is_array($this->protectSwitchList)) {
                $res['ProtectSwitchList'] = [];
                $n1 = 0;
                foreach ($this->protectSwitchList as $item1) {
                    $res['ProtectSwitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ProtectSwitchList'])) {
            if (!empty($map['ProtectSwitchList'])) {
                $model->protectSwitchList = [];
                $n1 = 0;
                foreach ($map['ProtectSwitchList'] as $item1) {
                    $model->protectSwitchList[$n1] = protectSwitchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
