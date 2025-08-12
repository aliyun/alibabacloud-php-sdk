<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo;

class streamCountInfos extends Model
{
    /**
     * @var streamCountInfo[]
     */
    public $streamCountInfo;
    protected $_name = [
        'streamCountInfo' => 'StreamCountInfo',
    ];

    public function validate()
    {
        if (\is_array($this->streamCountInfo)) {
            Model::validateArray($this->streamCountInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamCountInfo) {
            if (\is_array($this->streamCountInfo)) {
                $res['StreamCountInfo'] = [];
                $n1 = 0;
                foreach ($this->streamCountInfo as $item1) {
                    $res['StreamCountInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StreamCountInfo'])) {
            if (!empty($map['StreamCountInfo'])) {
                $model->streamCountInfo = [];
                $n1 = 0;
                foreach ($map['StreamCountInfo'] as $item1) {
                    $model->streamCountInfo[$n1] = streamCountInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
