<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAvailableAttackPathResponseBody\attackPathList;

class ListAvailableAttackPathResponseBody extends Model
{
    /**
     * @var attackPathList[]
     */
    public $attackPathList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathList' => 'AttackPathList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathList)) {
            Model::validateArray($this->attackPathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathList) {
            if (\is_array($this->attackPathList)) {
                $res['AttackPathList'] = [];
                $n1 = 0;
                foreach ($this->attackPathList as $item1) {
                    $res['AttackPathList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackPathList'])) {
            if (!empty($map['AttackPathList'])) {
                $model->attackPathList = [];
                $n1 = 0;
                foreach ($map['AttackPathList'] as $item1) {
                    $model->attackPathList[$n1] = attackPathList::fromMap($item1);
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
