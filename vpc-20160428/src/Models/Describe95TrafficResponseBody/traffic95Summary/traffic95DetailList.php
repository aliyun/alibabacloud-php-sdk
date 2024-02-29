<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary;

use AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary\traffic95DetailList\traffic95Detail;
use AlibabaCloud\Tea\Model;

class traffic95DetailList extends Model
{
    /**
     * @var traffic95Detail[]
     */
    public $traffic95Detail;
    protected $_name = [
        'traffic95Detail' => 'Traffic95Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traffic95Detail) {
            $res['Traffic95Detail'] = [];
            if (null !== $this->traffic95Detail && \is_array($this->traffic95Detail)) {
                $n = 0;
                foreach ($this->traffic95Detail as $item) {
                    $res['Traffic95Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traffic95DetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Traffic95Detail'])) {
            if (!empty($map['Traffic95Detail'])) {
                $model->traffic95Detail = [];
                $n                      = 0;
                foreach ($map['Traffic95Detail'] as $item) {
                    $model->traffic95Detail[$n++] = null !== $item ? traffic95Detail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
