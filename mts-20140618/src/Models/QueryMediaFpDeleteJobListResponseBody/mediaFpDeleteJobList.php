<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListResponseBody\mediaFpDeleteJobList\mediaFpDeleteJob;
use AlibabaCloud\Tea\Model;

class mediaFpDeleteJobList extends Model
{
    /**
     * @var mediaFpDeleteJob[]
     */
    public $mediaFpDeleteJob;
    protected $_name = [
        'mediaFpDeleteJob' => 'MediaFpDeleteJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaFpDeleteJob) {
            $res['MediaFpDeleteJob'] = [];
            if (null !== $this->mediaFpDeleteJob && \is_array($this->mediaFpDeleteJob)) {
                $n = 0;
                foreach ($this->mediaFpDeleteJob as $item) {
                    $res['MediaFpDeleteJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaFpDeleteJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaFpDeleteJob'])) {
            if (!empty($map['MediaFpDeleteJob'])) {
                $model->mediaFpDeleteJob = [];
                $n                       = 0;
                foreach ($map['MediaFpDeleteJob'] as $item) {
                    $model->mediaFpDeleteJob[$n++] = null !== $item ? mediaFpDeleteJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
