<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponse\casterStreams\casterStream;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponse\casterStreams\casterStream\streamInfos\streamInfo;
use AlibabaCloud\Tea\Model;

class streamInfos extends Model
{
    /**
     * @var streamInfo[]
     */
    public $streamInfo;
    protected $_name = [
        'streamInfo' => 'StreamInfo',
    ];

    public function validate()
    {
        Model::validateRequired('streamInfo', $this->streamInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamInfo) {
            $res['StreamInfo'] = [];
            if (null !== $this->streamInfo && \is_array($this->streamInfo)) {
                $n = 0;
                foreach ($this->streamInfo as $item) {
                    $res['StreamInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamInfo'])) {
            if (!empty($map['StreamInfo'])) {
                $model->streamInfo = [];
                $n                 = 0;
                foreach ($map['StreamInfo'] as $item) {
                    $model->streamInfo[$n++] = null !== $item ? streamInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
