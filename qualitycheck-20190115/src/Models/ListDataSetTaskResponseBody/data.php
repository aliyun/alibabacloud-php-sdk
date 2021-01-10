<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data\pageTaskInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var pageTaskInfo[]
     */
    public $pageTaskInfo;
    protected $_name = [
        'pageTaskInfo' => 'PageTaskInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageTaskInfo) {
            $res['PageTaskInfo'] = [];
            if (null !== $this->pageTaskInfo && \is_array($this->pageTaskInfo)) {
                $n = 0;
                foreach ($this->pageTaskInfo as $item) {
                    $res['PageTaskInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PageTaskInfo'])) {
            if (!empty($map['PageTaskInfo'])) {
                $model->pageTaskInfo = [];
                $n                   = 0;
                foreach ($map['PageTaskInfo'] as $item) {
                    $model->pageTaskInfo[$n++] = null !== $item ? pageTaskInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
