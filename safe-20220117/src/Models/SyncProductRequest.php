<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SyncProductRequest\syncProductList;

class SyncProductRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var syncProductList[]
     */
    public $syncProductList;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'reqTimestamp' => 'ReqTimestamp',
        'syncProductList' => 'SyncProductList',
    ];

    public function validate()
    {
        if (\is_array($this->syncProductList)) {
            Model::validateArray($this->syncProductList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->syncProductList) {
            if (\is_array($this->syncProductList)) {
                $res['SyncProductList'] = [];
                $n1 = 0;
                foreach ($this->syncProductList as $item1) {
                    $res['SyncProductList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['SyncProductList'])) {
            if (!empty($map['SyncProductList'])) {
                $model->syncProductList = [];
                $n1 = 0;
                foreach ($map['SyncProductList'] as $item1) {
                    $model->syncProductList[$n1] = syncProductList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
