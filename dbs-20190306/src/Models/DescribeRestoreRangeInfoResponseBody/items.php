<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var DBSRecoverRange[]
     */
    public $DBSRecoverRange;
    protected $_name = [
        'DBSRecoverRange' => 'DBSRecoverRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBSRecoverRange) {
            $res['DBSRecoverRange'] = [];
            if (null !== $this->DBSRecoverRange && \is_array($this->DBSRecoverRange)) {
                $n = 0;
                foreach ($this->DBSRecoverRange as $item) {
                    $res['DBSRecoverRange'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBSRecoverRange'])) {
            if (!empty($map['DBSRecoverRange'])) {
                $model->DBSRecoverRange = [];
                $n                      = 0;
                foreach ($map['DBSRecoverRange'] as $item) {
                    $model->DBSRecoverRange[$n++] = null !== $item ? DBSRecoverRange::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
