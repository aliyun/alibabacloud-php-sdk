<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody\livePrivateLineAvailGAs\livePrivateLineAvailGA;
use AlibabaCloud\Tea\Model;

class livePrivateLineAvailGAs extends Model
{
    /**
     * @var livePrivateLineAvailGA[]
     */
    public $livePrivateLineAvailGA;
    protected $_name = [
        'livePrivateLineAvailGA' => 'LivePrivateLineAvailGA',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePrivateLineAvailGA) {
            $res['LivePrivateLineAvailGA'] = [];
            if (null !== $this->livePrivateLineAvailGA && \is_array($this->livePrivateLineAvailGA)) {
                $n = 0;
                foreach ($this->livePrivateLineAvailGA as $item) {
                    $res['LivePrivateLineAvailGA'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livePrivateLineAvailGAs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePrivateLineAvailGA'])) {
            if (!empty($map['LivePrivateLineAvailGA'])) {
                $model->livePrivateLineAvailGA = [];
                $n = 0;
                foreach ($map['LivePrivateLineAvailGA'] as $item) {
                    $model->livePrivateLineAvailGA[$n++] = null !== $item ? livePrivateLineAvailGA::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
