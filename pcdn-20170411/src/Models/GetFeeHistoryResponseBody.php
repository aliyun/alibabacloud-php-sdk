<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponseBody\feeList;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponseBody\pager;
use AlibabaCloud\Tea\Model;

class GetFeeHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var feeList
     */
    public $feeList;

    /**
     * @var pager
     */
    public $pager;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'requestId' => 'RequestId',
        'feeList'   => 'FeeList',
        'pager'     => 'Pager',
        'code'      => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->feeList) {
            $res['FeeList'] = null !== $this->feeList ? $this->feeList->toMap() : null;
        }
        if (null !== $this->pager) {
            $res['Pager'] = null !== $this->pager ? $this->pager->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFeeHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FeeList'])) {
            $model->feeList = feeList::fromMap($map['FeeList']);
        }
        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
