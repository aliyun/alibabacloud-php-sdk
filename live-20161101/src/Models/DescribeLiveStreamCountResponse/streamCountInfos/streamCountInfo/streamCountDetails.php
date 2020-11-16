<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse\streamCountInfos\streamCountInfo;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse\streamCountInfos\streamCountInfo\streamCountDetails\streamCountDetail;
use AlibabaCloud\Tea\Model;

class streamCountDetails extends Model
{
    /**
     * @var streamCountDetail[]
     */
    public $streamCountDetail;
    protected $_name = [
        'streamCountDetail' => 'StreamCountDetail',
    ];

    public function validate()
    {
        Model::validateRequired('streamCountDetail', $this->streamCountDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamCountDetail) {
            $res['StreamCountDetail'] = [];
            if (null !== $this->streamCountDetail && \is_array($this->streamCountDetail)) {
                $n = 0;
                foreach ($this->streamCountDetail as $item) {
                    $res['StreamCountDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamCountDetail'])) {
            if (!empty($map['StreamCountDetail'])) {
                $model->streamCountDetail = [];
                $n                        = 0;
                foreach ($map['StreamCountDetail'] as $item) {
                    $model->streamCountDetail[$n++] = null !== $item ? streamCountDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
