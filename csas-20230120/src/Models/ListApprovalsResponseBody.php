<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalsResponseBody\approvals;

class ListApprovalsResponseBody extends Model
{
    /**
     * @var approvals[]
     */
    public $approvals;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalNum;
    protected $_name = [
        'approvals' => 'Approvals',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->approvals)) {
            Model::validateArray($this->approvals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvals) {
            if (\is_array($this->approvals)) {
                $res['Approvals'] = [];
                $n1 = 0;
                foreach ($this->approvals as $item1) {
                    $res['Approvals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['Approvals'])) {
            if (!empty($map['Approvals'])) {
                $model->approvals = [];
                $n1 = 0;
                foreach ($map['Approvals'] as $item1) {
                    $model->approvals[$n1] = approvals::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
