<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceOwnerUidResponseBody\ownerInfos;

class DescribeDefenseResourceOwnerUidResponseBody extends Model
{
    /**
     * @var ownerInfos[]
     */
    public $ownerInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ownerInfos' => 'OwnerInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ownerInfos)) {
            Model::validateArray($this->ownerInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerInfos) {
            if (\is_array($this->ownerInfos)) {
                $res['OwnerInfos'] = [];
                $n1 = 0;
                foreach ($this->ownerInfos as $item1) {
                    $res['OwnerInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OwnerInfos'])) {
            if (!empty($map['OwnerInfos'])) {
                $model->ownerInfos = [];
                $n1 = 0;
                foreach ($map['OwnerInfos'] as $item1) {
                    $model->ownerInfos[$n1] = ownerInfos::fromMap($item1);
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
