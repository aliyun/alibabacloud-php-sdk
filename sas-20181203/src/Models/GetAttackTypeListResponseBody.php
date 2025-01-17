<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackTypeListResponseBody\attackTypeList;

class GetAttackTypeListResponseBody extends Model
{
    /**
     * @var attackTypeList[]
     */
    public $attackTypeList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackTypeList' => 'AttackTypeList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackTypeList)) {
            Model::validateArray($this->attackTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackTypeList) {
            if (\is_array($this->attackTypeList)) {
                $res['AttackTypeList'] = [];
                $n1                    = 0;
                foreach ($this->attackTypeList as $item1) {
                    $res['AttackTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackTypeList'])) {
            if (!empty($map['AttackTypeList'])) {
                $model->attackTypeList = [];
                $n1                    = 0;
                foreach ($map['AttackTypeList'] as $item1) {
                    $model->attackTypeList[$n1++] = attackTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
