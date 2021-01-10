<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob;
use AlibabaCloud\Tea\Model;

class tagJobList extends Model
{
    /**
     * @var tagJob[]
     */
    public $tagJob;
    protected $_name = [
        'tagJob' => 'TagJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagJob) {
            $res['TagJob'] = [];
            if (null !== $this->tagJob && \is_array($this->tagJob)) {
                $n = 0;
                foreach ($this->tagJob as $item) {
                    $res['TagJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagJob'])) {
            if (!empty($map['TagJob'])) {
                $model->tagJob = [];
                $n             = 0;
                foreach ($map['TagJob'] as $item) {
                    $model->tagJob[$n++] = null !== $item ? tagJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
