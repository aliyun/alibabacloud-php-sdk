<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponseBody\items\restoreTaskDetail;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var restoreTaskDetail[]
     */
    public $restoreTaskDetail;
    protected $_name = [
        'restoreTaskDetail' => 'RestoreTaskDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreTaskDetail) {
            $res['RestoreTaskDetail'] = [];
            if (null !== $this->restoreTaskDetail && \is_array($this->restoreTaskDetail)) {
                $n = 0;
                foreach ($this->restoreTaskDetail as $item) {
                    $res['RestoreTaskDetail'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RestoreTaskDetail'])) {
            if (!empty($map['RestoreTaskDetail'])) {
                $model->restoreTaskDetail = [];
                $n                        = 0;
                foreach ($map['RestoreTaskDetail'] as $item) {
                    $model->restoreTaskDetail[$n++] = null !== $item ? restoreTaskDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
