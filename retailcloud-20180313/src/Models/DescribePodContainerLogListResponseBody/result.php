<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodContainerLogListResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodContainerLogListResponseBody\result\containerLogList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var containerLogList[]
     */
    public $containerLogList;
    protected $_name = [
        'containerLogList' => 'ContainerLogList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerLogList) {
            $res['ContainerLogList'] = [];
            if (null !== $this->containerLogList && \is_array($this->containerLogList)) {
                $n = 0;
                foreach ($this->containerLogList as $item) {
                    $res['ContainerLogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerLogList'])) {
            if (!empty($map['ContainerLogList'])) {
                $model->containerLogList = [];
                $n                       = 0;
                foreach ($map['ContainerLogList'] as $item) {
                    $model->containerLogList[$n++] = null !== $item ? containerLogList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
