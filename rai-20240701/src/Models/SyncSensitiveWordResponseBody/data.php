<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordResponseBody;

use AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordResponseBody\data\sensitiveWordErrorList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var sensitiveWordErrorList[]
     */
    public $sensitiveWordErrorList;
    protected $_name = [
        'sensitiveWordErrorList' => 'SensitiveWordErrorList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveWordErrorList) {
            $res['SensitiveWordErrorList'] = [];
            if (null !== $this->sensitiveWordErrorList && \is_array($this->sensitiveWordErrorList)) {
                $n = 0;
                foreach ($this->sensitiveWordErrorList as $item) {
                    $res['SensitiveWordErrorList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SensitiveWordErrorList'])) {
            if (!empty($map['SensitiveWordErrorList'])) {
                $model->sensitiveWordErrorList = [];
                $n                             = 0;
                foreach ($map['SensitiveWordErrorList'] as $item) {
                    $model->sensitiveWordErrorList[$n++] = null !== $item ? sensitiveWordErrorList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
