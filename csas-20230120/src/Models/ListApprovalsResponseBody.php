<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalsResponseBody\approvals;
use AlibabaCloud\Tea\Model;

class ListApprovalsResponseBody extends Model
{
    /**
     * @var approvals[]
     */
    public $approvals;

    /**
     * @example 6965F5BA-53B6-5650-A708-51F090F843BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalNum;
    protected $_name = [
        'approvals' => 'Approvals',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvals) {
            $res['Approvals'] = [];
            if (null !== $this->approvals && \is_array($this->approvals)) {
                $n = 0;
                foreach ($this->approvals as $item) {
                    $res['Approvals'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListApprovalsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Approvals'])) {
            if (!empty($map['Approvals'])) {
                $model->approvals = [];
                $n = 0;
                foreach ($map['Approvals'] as $item) {
                    $model->approvals[$n++] = null !== $item ? approvals::fromMap($item) : $item;
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
