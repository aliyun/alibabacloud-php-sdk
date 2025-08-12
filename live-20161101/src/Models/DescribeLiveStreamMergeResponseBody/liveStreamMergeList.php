<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody\liveStreamMergeList\liveStreamMerge;

class liveStreamMergeList extends Model
{
    /**
     * @var liveStreamMerge[]
     */
    public $liveStreamMerge;
    protected $_name = [
        'liveStreamMerge' => 'LiveStreamMerge',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamMerge)) {
            Model::validateArray($this->liveStreamMerge);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamMerge) {
            if (\is_array($this->liveStreamMerge)) {
                $res['LiveStreamMerge'] = [];
                $n1 = 0;
                foreach ($this->liveStreamMerge as $item1) {
                    $res['LiveStreamMerge'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamMerge'])) {
            if (!empty($map['LiveStreamMerge'])) {
                $model->liveStreamMerge = [];
                $n1 = 0;
                foreach ($map['LiveStreamMerge'] as $item1) {
                    $model->liveStreamMerge[$n1] = liveStreamMerge::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
