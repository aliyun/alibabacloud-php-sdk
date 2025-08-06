<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCategoryJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCategoryJobResponseBody\AIVideoCategoryJobList\AIVideoCategoryJob;

class AIVideoCategoryJobList extends Model
{
    /**
     * @var AIVideoCategoryJob[]
     */
    public $AIVideoCategoryJob;
    protected $_name = [
        'AIVideoCategoryJob' => 'AIVideoCategoryJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoCategoryJob)) {
            Model::validateArray($this->AIVideoCategoryJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCategoryJob) {
            if (\is_array($this->AIVideoCategoryJob)) {
                $res['AIVideoCategoryJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoCategoryJob as $item1) {
                    $res['AIVideoCategoryJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoCategoryJob'])) {
            if (!empty($map['AIVideoCategoryJob'])) {
                $model->AIVideoCategoryJob = [];
                $n1 = 0;
                foreach ($map['AIVideoCategoryJob'] as $item1) {
                    $model->AIVideoCategoryJob[$n1] = AIVideoCategoryJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
