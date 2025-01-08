<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordRequest;

use AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordRequest\bodyData\sensitiveWordList;
use AlibabaCloud\Tea\Model;

class bodyData extends Model
{
    /**
     * @var sensitiveWordList[]
     */
    public $sensitiveWordList;
    protected $_name = [
        'sensitiveWordList' => 'SensitiveWordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveWordList) {
            $res['SensitiveWordList'] = [];
            if (null !== $this->sensitiveWordList && \is_array($this->sensitiveWordList)) {
                $n = 0;
                foreach ($this->sensitiveWordList as $item) {
                    $res['SensitiveWordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bodyData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SensitiveWordList'])) {
            if (!empty($map['SensitiveWordList'])) {
                $model->sensitiveWordList = [];
                $n                        = 0;
                foreach ($map['SensitiveWordList'] as $item) {
                    $model->sensitiveWordList[$n++] = null !== $item ? sensitiveWordList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
