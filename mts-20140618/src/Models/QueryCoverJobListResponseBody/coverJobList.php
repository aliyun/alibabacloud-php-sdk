<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob;
use AlibabaCloud\Tea\Model;

class coverJobList extends Model
{
    /**
     * @var coverJob[]
     */
    public $coverJob;
    protected $_name = [
        'coverJob' => 'CoverJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverJob) {
            $res['CoverJob'] = [];
            if (null !== $this->coverJob && \is_array($this->coverJob)) {
                $n = 0;
                foreach ($this->coverJob as $item) {
                    $res['CoverJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverJob'])) {
            if (!empty($map['CoverJob'])) {
                $model->coverJob = [];
                $n               = 0;
                foreach ($map['CoverJob'] as $item) {
                    $model->coverJob[$n++] = null !== $item ? coverJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
