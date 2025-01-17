<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUnfinishedOnceTaskResponseBody\onceTasks;

class ListUnfinishedOnceTaskResponseBody extends Model
{
    /**
     * @var onceTasks[]
     */
    public $onceTasks;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'onceTasks' => 'OnceTasks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->onceTasks)) {
            Model::validateArray($this->onceTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onceTasks) {
            if (\is_array($this->onceTasks)) {
                $res['OnceTasks'] = [];
                $n1               = 0;
                foreach ($this->onceTasks as $item1) {
                    $res['OnceTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OnceTasks'])) {
            if (!empty($map['OnceTasks'])) {
                $model->onceTasks = [];
                $n1               = 0;
                foreach ($map['OnceTasks'] as $item1) {
                    $model->onceTasks[$n1++] = onceTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
