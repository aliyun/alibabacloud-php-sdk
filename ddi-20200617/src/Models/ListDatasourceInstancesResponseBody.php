<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponseBody\ddiDatasourceInfoList;
use AlibabaCloud\Tea\Model;

class ListDatasourceInstancesResponseBody extends Model
{
    /**
     * @var ddiDatasourceInfoList
     */
    public $ddiDatasourceInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ddiDatasourceInfoList' => 'DdiDatasourceInfoList',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddiDatasourceInfoList) {
            $res['DdiDatasourceInfoList'] = null !== $this->ddiDatasourceInfoList ? $this->ddiDatasourceInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasourceInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdiDatasourceInfoList'])) {
            $model->ddiDatasourceInfoList = ddiDatasourceInfoList::fromMap($map['DdiDatasourceInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
