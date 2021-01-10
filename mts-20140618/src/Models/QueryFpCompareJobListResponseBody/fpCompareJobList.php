<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob;
use AlibabaCloud\Tea\Model;

class fpCompareJobList extends Model
{
    /**
     * @var fpCompareJob[]
     */
    public $fpCompareJob;
    protected $_name = [
        'fpCompareJob' => 'FpCompareJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpCompareJob) {
            $res['FpCompareJob'] = [];
            if (null !== $this->fpCompareJob && \is_array($this->fpCompareJob)) {
                $n = 0;
                foreach ($this->fpCompareJob as $item) {
                    $res['FpCompareJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpCompareJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpCompareJob'])) {
            if (!empty($map['FpCompareJob'])) {
                $model->fpCompareJob = [];
                $n                   = 0;
                foreach ($map['FpCompareJob'] as $item) {
                    $model->fpCompareJob[$n++] = null !== $item ? fpCompareJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
