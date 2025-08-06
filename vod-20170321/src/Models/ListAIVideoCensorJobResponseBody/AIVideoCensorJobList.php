<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCensorJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCensorJobResponseBody\AIVideoCensorJobList\AIVideoCensorJob;

class AIVideoCensorJobList extends Model
{
    /**
     * @var AIVideoCensorJob[]
     */
    public $AIVideoCensorJob;
    protected $_name = [
        'AIVideoCensorJob' => 'AIVideoCensorJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoCensorJob)) {
            Model::validateArray($this->AIVideoCensorJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCensorJob) {
            if (\is_array($this->AIVideoCensorJob)) {
                $res['AIVideoCensorJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoCensorJob as $item1) {
                    $res['AIVideoCensorJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoCensorJob'])) {
            if (!empty($map['AIVideoCensorJob'])) {
                $model->AIVideoCensorJob = [];
                $n1 = 0;
                foreach ($map['AIVideoCensorJob'] as $item1) {
                    $model->AIVideoCensorJob[$n1] = AIVideoCensorJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
