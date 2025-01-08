<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponseBody;

use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponseBody\data\detectResultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detectResultList[]
     */
    public $detectResultList;
    protected $_name = [
        'detectResultList' => 'DetectResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectResultList) {
            $res['DetectResultList'] = [];
            if (null !== $this->detectResultList && \is_array($this->detectResultList)) {
                $n = 0;
                foreach ($this->detectResultList as $item) {
                    $res['DetectResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DetectResultList'])) {
            if (!empty($map['DetectResultList'])) {
                $model->detectResultList = [];
                $n                       = 0;
                foreach ($map['DetectResultList'] as $item) {
                    $model->detectResultList[$n++] = null !== $item ? detectResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
