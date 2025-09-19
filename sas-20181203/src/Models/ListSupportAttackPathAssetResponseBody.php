<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSupportAttackPathAssetResponseBody\attackPathAssetTypeList;

class ListSupportAttackPathAssetResponseBody extends Model
{
    /**
     * @var attackPathAssetTypeList[]
     */
    public $attackPathAssetTypeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathAssetTypeList' => 'AttackPathAssetTypeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathAssetTypeList)) {
            Model::validateArray($this->attackPathAssetTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathAssetTypeList) {
            if (\is_array($this->attackPathAssetTypeList)) {
                $res['AttackPathAssetTypeList'] = [];
                $n1 = 0;
                foreach ($this->attackPathAssetTypeList as $item1) {
                    $res['AttackPathAssetTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackPathAssetTypeList'])) {
            if (!empty($map['AttackPathAssetTypeList'])) {
                $model->attackPathAssetTypeList = [];
                $n1 = 0;
                foreach ($map['AttackPathAssetTypeList'] as $item1) {
                    $model->attackPathAssetTypeList[$n1] = attackPathAssetTypeList::fromMap($item1);
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
