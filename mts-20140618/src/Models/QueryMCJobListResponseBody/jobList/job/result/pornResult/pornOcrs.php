<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornOcrs\pornOcr;
use AlibabaCloud\Tea\Model;

class pornOcrs extends Model
{
    /**
     * @var pornOcr[]
     */
    public $pornOcr;
    protected $_name = [
        'pornOcr' => 'PornOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornOcr) {
            $res['PornOcr'] = [];
            if (null !== $this->pornOcr && \is_array($this->pornOcr)) {
                $n = 0;
                foreach ($this->pornOcr as $item) {
                    $res['PornOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornOcr'])) {
            if (!empty($map['PornOcr'])) {
                $model->pornOcr = [];
                $n              = 0;
                foreach ($map['PornOcr'] as $item) {
                    $model->pornOcr[$n++] = null !== $item ? pornOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
