<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCoverJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCoverJobResponseBody\AIVideoCoverJobList\AIVideoCoverJob;

class AIVideoCoverJobList extends Model
{
    /**
     * @var AIVideoCoverJob[]
     */
    public $AIVideoCoverJob;
    protected $_name = [
        'AIVideoCoverJob' => 'AIVideoCoverJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoCoverJob)) {
            Model::validateArray($this->AIVideoCoverJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCoverJob) {
            if (\is_array($this->AIVideoCoverJob)) {
                $res['AIVideoCoverJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoCoverJob as $item1) {
                    $res['AIVideoCoverJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoCoverJob'])) {
            if (!empty($map['AIVideoCoverJob'])) {
                $model->AIVideoCoverJob = [];
                $n1 = 0;
                foreach ($map['AIVideoCoverJob'] as $item1) {
                    $model->AIVideoCoverJob[$n1] = AIVideoCoverJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
