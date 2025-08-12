<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo\streamCountDetails\streamCountDetail;

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
        if (\is_array($this->streamCountDetail)) {
            Model::validateArray($this->streamCountDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamCountDetail) {
            if (\is_array($this->streamCountDetail)) {
                $res['StreamCountDetail'] = [];
                $n1 = 0;
                foreach ($this->streamCountDetail as $item1) {
                    $res['StreamCountDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StreamCountDetail'])) {
            if (!empty($map['StreamCountDetail'])) {
                $model->streamCountDetail = [];
                $n1 = 0;
                foreach ($map['StreamCountDetail'] as $item1) {
                    $model->streamCountDetail[$n1] = streamCountDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
