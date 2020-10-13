<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponse\feeList;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponse\pager;
use AlibabaCloud\Tea\Model;

class GetFeeHistoryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var feeList
     */
    public $feeList;

    /**
     * @var pager
     */
    public $pager;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'feeList'   => 'FeeList',
        'pager'     => 'Pager',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('feeList', $this->feeList, true);
        Model::validateRequired('pager', $this->pager, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->feeList) {
            $res['FeeList'] = null !== $this->feeList ? $this->feeList->toMap() : null;
        }
        if (null !== $this->pager) {
            $res['Pager'] = null !== $this->pager ? $this->pager->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFeeHistoryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FeeList'])) {
            $model->feeList = feeList::fromMap($map['FeeList']);
        }
        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }

        return $model;
    }
}
