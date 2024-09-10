<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackTypeListResponseBody\attackTypeList;
use AlibabaCloud\Tea\Model;

class GetAttackTypeListResponseBody extends Model
{
    /**
     * @var attackTypeList[]
     */
    public $attackTypeList;

    /**
     * @example CE500770-42D3-442E-9DDD-156E0F9F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackTypeList' => 'AttackTypeList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackTypeList) {
            $res['AttackTypeList'] = [];
            if (null !== $this->attackTypeList && \is_array($this->attackTypeList)) {
                $n = 0;
                foreach ($this->attackTypeList as $item) {
                    $res['AttackTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAttackTypeListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackTypeList'])) {
            if (!empty($map['AttackTypeList'])) {
                $model->attackTypeList = [];
                $n                     = 0;
                foreach ($map['AttackTypeList'] as $item) {
                    $model->attackTypeList[$n++] = null !== $item ? attackTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
