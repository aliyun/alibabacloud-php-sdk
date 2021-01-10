<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsOcrs\politicsOcr;
use AlibabaCloud\Tea\Model;

class politicsOcrs extends Model
{
    /**
     * @var politicsOcr[]
     */
    public $politicsOcr;
    protected $_name = [
        'politicsOcr' => 'PoliticsOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsOcr) {
            $res['PoliticsOcr'] = [];
            if (null !== $this->politicsOcr && \is_array($this->politicsOcr)) {
                $n = 0;
                foreach ($this->politicsOcr as $item) {
                    $res['PoliticsOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicsOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoliticsOcr'])) {
            if (!empty($map['PoliticsOcr'])) {
                $model->politicsOcr = [];
                $n                  = 0;
                foreach ($map['PoliticsOcr'] as $item) {
                    $model->politicsOcr[$n++] = null !== $item ? politicsOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
