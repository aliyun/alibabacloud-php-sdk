<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob;
use AlibabaCloud\Tea\Model;

class jobs extends Model
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
     * @return jobs
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
