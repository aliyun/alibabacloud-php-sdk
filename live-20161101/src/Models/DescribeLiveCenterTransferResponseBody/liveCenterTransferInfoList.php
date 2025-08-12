<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody\liveCenterTransferInfoList\liveCenterTransferInfo;

class liveCenterTransferInfoList extends Model
{
    /**
     * @var liveCenterTransferInfo[]
     */
    public $liveCenterTransferInfo;
    protected $_name = [
        'liveCenterTransferInfo' => 'LiveCenterTransferInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveCenterTransferInfo)) {
            Model::validateArray($this->liveCenterTransferInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveCenterTransferInfo) {
            if (\is_array($this->liveCenterTransferInfo)) {
                $res['LiveCenterTransferInfo'] = [];
                $n1 = 0;
                foreach ($this->liveCenterTransferInfo as $item1) {
                    $res['LiveCenterTransferInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveCenterTransferInfo'])) {
            if (!empty($map['LiveCenterTransferInfo'])) {
                $model->liveCenterTransferInfo = [];
                $n1 = 0;
                foreach ($map['LiveCenterTransferInfo'] as $item1) {
                    $model->liveCenterTransferInfo[$n1] = liveCenterTransferInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
