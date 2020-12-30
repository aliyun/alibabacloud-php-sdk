<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\AIJobList\AIJob;
use AlibabaCloud\Tea\Model;

class AIJobList extends Model
{
    /**
     * @var AIJob[]
     */
    public $AIJob;
    protected $_name = [
        'AIJob' => 'AIJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIJob) {
            $res['AIJob'] = [];
            if (null !== $this->AIJob && \is_array($this->AIJob)) {
                $n = 0;
                foreach ($this->AIJob as $item) {
                    $res['AIJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIJob'])) {
            if (!empty($map['AIJob'])) {
                $model->AIJob = [];
                $n            = 0;
                foreach ($map['AIJob'] as $item) {
                    $model->AIJob[$n++] = null !== $item ? AIJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
