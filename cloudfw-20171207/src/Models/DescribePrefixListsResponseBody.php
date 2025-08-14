<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrefixListsResponseBody\prefixList;

class DescribePrefixListsResponseBody extends Model
{
    /**
     * @var prefixList[]
     */
    public $prefixList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prefixList' => 'PrefixList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->prefixList)) {
            Model::validateArray($this->prefixList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prefixList) {
            if (\is_array($this->prefixList)) {
                $res['PrefixList'] = [];
                $n1 = 0;
                foreach ($this->prefixList as $item1) {
                    $res['PrefixList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrefixList'])) {
            if (!empty($map['PrefixList'])) {
                $model->prefixList = [];
                $n1 = 0;
                foreach ($map['PrefixList'] as $item1) {
                    $model->prefixList[$n1] = prefixList::fromMap($item1);
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
