<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob;
use AlibabaCloud\Tea\Model;

class censorJobList extends Model
{
    /**
     * @var censorJob[]
     */
    public $censorJob;
    protected $_name = [
        'censorJob' => 'CensorJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->censorJob) {
            $res['CensorJob'] = [];
            if (null !== $this->censorJob && \is_array($this->censorJob)) {
                $n = 0;
                foreach ($this->censorJob as $item) {
                    $res['CensorJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return censorJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CensorJob'])) {
            if (!empty($map['CensorJob'])) {
                $model->censorJob = [];
                $n                = 0;
                foreach ($map['CensorJob'] as $item) {
                    $model->censorJob[$n++] = null !== $item ? censorJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
