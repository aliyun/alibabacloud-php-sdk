<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferOutByAuthorizationCodeRequest\transferOutParamList;

class SaveBatchTaskForTransferOutByAuthorizationCodeRequest extends Model
{
    /**
     * @var transferOutParamList[]
     */
    public $transferOutParamList;
    protected $_name = [
        'transferOutParamList' => 'TransferOutParamList',
    ];

    public function validate()
    {
        if (\is_array($this->transferOutParamList)) {
            Model::validateArray($this->transferOutParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transferOutParamList) {
            if (\is_array($this->transferOutParamList)) {
                $res['TransferOutParamList'] = [];
                $n1 = 0;
                foreach ($this->transferOutParamList as $item1) {
                    $res['TransferOutParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TransferOutParamList'])) {
            if (!empty($map['TransferOutParamList'])) {
                $model->transferOutParamList = [];
                $n1 = 0;
                foreach ($map['TransferOutParamList'] as $item1) {
                    $model->transferOutParamList[$n1] = transferOutParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
