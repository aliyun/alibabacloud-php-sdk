<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models\SenderStatisticsByTagNameAndBatchIDResponseBody;

use AlibabaCloud\SDK\Dm\V20170622\Models\SenderStatisticsByTagNameAndBatchIDResponseBody\data\stat;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var stat[]
     */
    public $stat;
    protected $_name = [
        'stat' => 'stat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stat) {
            $res['stat'] = [];
            if (null !== $this->stat && \is_array($this->stat)) {
                $n = 0;
                foreach ($this->stat as $item) {
                    $res['stat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stat'])) {
            if (!empty($map['stat'])) {
                $model->stat = [];
                $n           = 0;
                foreach ($map['stat'] as $item) {
                    $model->stat[$n++] = null !== $item ? stat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
