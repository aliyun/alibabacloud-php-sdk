<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandOcrs\contrabandOcr;
use AlibabaCloud\Tea\Model;

class contrabandOcrs extends Model
{
    /**
     * @var contrabandOcr[]
     */
    public $contrabandOcr;
    protected $_name = [
        'contrabandOcr' => 'ContrabandOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contrabandOcr) {
            $res['ContrabandOcr'] = [];
            if (null !== $this->contrabandOcr && \is_array($this->contrabandOcr)) {
                $n = 0;
                foreach ($this->contrabandOcr as $item) {
                    $res['ContrabandOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contrabandOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContrabandOcr'])) {
            if (!empty($map['ContrabandOcr'])) {
                $model->contrabandOcr = [];
                $n                    = 0;
                foreach ($map['ContrabandOcr'] as $item) {
                    $model->contrabandOcr[$n++] = null !== $item ? contrabandOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
