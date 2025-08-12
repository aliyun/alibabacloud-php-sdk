<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody\streamCountList\streamCountInfos;

class streamCountList extends Model
{
    /**
     * @var streamCountInfos[]
     */
    public $streamCountInfos;
    protected $_name = [
        'streamCountInfos' => 'StreamCountInfos',
    ];

    public function validate()
    {
        if (\is_array($this->streamCountInfos)) {
            Model::validateArray($this->streamCountInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamCountInfos) {
            if (\is_array($this->streamCountInfos)) {
                $res['StreamCountInfos'] = [];
                $n1 = 0;
                foreach ($this->streamCountInfos as $item1) {
                    $res['StreamCountInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StreamCountInfos'])) {
            if (!empty($map['StreamCountInfos'])) {
                $model->streamCountInfos = [];
                $n1 = 0;
                foreach ($map['StreamCountInfos'] as $item1) {
                    $model->streamCountInfos[$n1] = streamCountInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
