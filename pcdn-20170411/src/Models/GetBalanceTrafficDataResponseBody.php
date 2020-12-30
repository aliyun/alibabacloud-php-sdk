<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBalanceTrafficDataResponseBody\dataList;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBalanceTrafficDataResponseBody\labels;
use AlibabaCloud\Tea\Model;

class GetBalanceTrafficDataResponseBody extends Model
{
    /**
     * @var dataList
     */
    public $dataList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var labels
     */
    public $labels;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'dataList'  => 'DataList',
        'requestId' => 'RequestId',
        'labels'    => 'Labels',
        'code'      => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataList) {
            $res['DataList'] = null !== $this->dataList ? $this->dataList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBalanceTrafficDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataList'])) {
            $model->dataList = dataList::fromMap($map['DataList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Labels'])) {
            $model->labels = labels::fromMap($map['Labels']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
