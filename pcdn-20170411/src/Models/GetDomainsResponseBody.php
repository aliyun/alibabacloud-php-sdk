<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponseBody\dataList;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponseBody\pager;
use AlibabaCloud\Tea\Model;

class GetDomainsResponseBody extends Model
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
     * @var pager
     */
    public $pager;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'dataList'  => 'DataList',
        'requestId' => 'RequestId',
        'pager'     => 'Pager',
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
     * @return GetDomainsResponseBody
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
        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
