<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody\data\transferInInfo;

class data extends Model
{
    /**
     * @var transferInInfo[]
     */
    public $transferInInfo;
    protected $_name = [
        'transferInInfo' => 'TransferInInfo',
    ];

    public function validate()
    {
        if (\is_array($this->transferInInfo)) {
            Model::validateArray($this->transferInInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transferInInfo) {
            if (\is_array($this->transferInInfo)) {
                $res['TransferInInfo'] = [];
                $n1 = 0;
                foreach ($this->transferInInfo as $item1) {
                    $res['TransferInInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TransferInInfo'])) {
            if (!empty($map['TransferInInfo'])) {
                $model->transferInInfo = [];
                $n1 = 0;
                foreach ($map['TransferInInfo'] as $item1) {
                    $model->transferInInfo[$n1] = transferInInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
