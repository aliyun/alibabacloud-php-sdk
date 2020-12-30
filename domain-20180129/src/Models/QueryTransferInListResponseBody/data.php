<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody\data\transferInInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transferInInfo) {
            $res['TransferInInfo'] = [];
            if (null !== $this->transferInInfo && \is_array($this->transferInInfo)) {
                $n = 0;
                foreach ($this->transferInInfo as $item) {
                    $res['TransferInInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransferInInfo'])) {
            if (!empty($map['TransferInInfo'])) {
                $model->transferInInfo = [];
                $n                     = 0;
                foreach ($map['TransferInInfo'] as $item) {
                    $model->transferInInfo[$n++] = null !== $item ? transferInInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
