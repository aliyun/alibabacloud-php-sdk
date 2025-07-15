<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody\liveCenterTransferInfoList\liveCenterTransferInfo;
use AlibabaCloud\Tea\Model;

class liveCenterTransferInfoList extends Model
{
    /**
     * @var liveCenterTransferInfo[]
     */
    public $liveCenterTransferInfo;
    protected $_name = [
        'liveCenterTransferInfo' => 'LiveCenterTransferInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveCenterTransferInfo) {
            $res['LiveCenterTransferInfo'] = [];
            if (null !== $this->liveCenterTransferInfo && \is_array($this->liveCenterTransferInfo)) {
                $n = 0;
                foreach ($this->liveCenterTransferInfo as $item) {
                    $res['LiveCenterTransferInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveCenterTransferInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveCenterTransferInfo'])) {
            if (!empty($map['LiveCenterTransferInfo'])) {
                $model->liveCenterTransferInfo = [];
                $n = 0;
                foreach ($map['LiveCenterTransferInfo'] as $item) {
                    $model->liveCenterTransferInfo[$n++] = null !== $item ? liveCenterTransferInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
