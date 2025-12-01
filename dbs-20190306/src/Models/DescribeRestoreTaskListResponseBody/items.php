<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponseBody\items\restoreTaskDetail;

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
        if (\is_array($this->restoreTaskDetail)) {
            Model::validateArray($this->restoreTaskDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restoreTaskDetail) {
            if (\is_array($this->restoreTaskDetail)) {
                $res['RestoreTaskDetail'] = [];
                $n1 = 0;
                foreach ($this->restoreTaskDetail as $item1) {
                    $res['RestoreTaskDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreTaskDetail'])) {
            if (!empty($map['RestoreTaskDetail'])) {
                $model->restoreTaskDetail = [];
                $n1 = 0;
                foreach ($map['RestoreTaskDetail'] as $item1) {
                    $model->restoreTaskDetail[$n1] = restoreTaskDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
