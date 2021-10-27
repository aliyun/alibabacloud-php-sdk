<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody\precheckBackupResult;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody\precheckBackupResult\list_\list_[]
     */
    public $list;
    protected $_name = [
        'list' => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody\precheckBackupResult\list_\list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
