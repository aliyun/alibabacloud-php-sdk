<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponse\dataList;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponse\pager;
use AlibabaCloud\Tea\Model;

class GetDomainsResponse extends Model
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
     * @var dataList
     */
    public $dataList;

    /**
     * @var pager
     */
    public $pager;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'dataList'  => 'DataList',
        'pager'     => 'Pager',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('dataList', $this->dataList, true);
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
        if (null !== $this->dataList) {
            $res['DataList'] = null !== $this->dataList ? $this->dataList->toMap() : null;
        }
        if (null !== $this->pager) {
            $res['Pager'] = null !== $this->pager ? $this->pager->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDomainsResponse
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
        if (isset($map['DataList'])) {
            $model->dataList = dataList::fromMap($map['DataList']);
        }
        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }

        return $model;
    }
}
