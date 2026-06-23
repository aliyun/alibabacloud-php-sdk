<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTodoOpsTaskApprovalsResponseBody\approves;

class ListTodoOpsTaskApprovalsResponseBody extends Model
{
    /**
     * @var approves[]
     */
    public $approves;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'approves' => 'Approves',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->approves)) {
            Model::validateArray($this->approves);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approves) {
            if (\is_array($this->approves)) {
                $res['Approves'] = [];
                $n1 = 0;
                foreach ($this->approves as $item1) {
                    $res['Approves'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Approves'])) {
            if (!empty($map['Approves'])) {
                $model->approves = [];
                $n1 = 0;
                foreach ($map['Approves'] as $item1) {
                    $model->approves[$n1] = approves::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
