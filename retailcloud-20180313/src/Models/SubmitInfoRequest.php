<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SubmitInfoRequest\ecsDescList;
use AlibabaCloud\Tea\Model;

class SubmitInfoRequest extends Model
{
    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var ecsDescList[]
     */
    public $ecsDescList;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callerUid'   => 'CallerUid',
        'ecsDescList' => 'EcsDescList',
        'mainUserId'  => 'MainUserId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->ecsDescList) {
            $res['EcsDescList'] = [];
            if (null !== $this->ecsDescList && \is_array($this->ecsDescList)) {
                $n = 0;
                foreach ($this->ecsDescList as $item) {
                    $res['EcsDescList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['EcsDescList'])) {
            if (!empty($map['EcsDescList'])) {
                $model->ecsDescList = [];
                $n                  = 0;
                foreach ($map['EcsDescList'] as $item) {
                    $model->ecsDescList[$n++] = null !== $item ? ecsDescList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
