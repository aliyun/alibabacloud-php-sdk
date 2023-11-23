<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobResponseBody\indexJobInfoList;
use AlibabaCloud\Tea\Model;

class QueryMediaIndexJobResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var indexJobInfoList[]
     */
    public $indexJobInfoList;

    /**
     * @example 4E84BE44-58A7-****-****-FBEBEA16EF94
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'indexJobInfoList' => 'IndexJobInfoList',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->indexJobInfoList) {
            $res['IndexJobInfoList'] = [];
            if (null !== $this->indexJobInfoList && \is_array($this->indexJobInfoList)) {
                $n = 0;
                foreach ($this->indexJobInfoList as $item) {
                    $res['IndexJobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaIndexJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IndexJobInfoList'])) {
            if (!empty($map['IndexJobInfoList'])) {
                $model->indexJobInfoList = [];
                $n                       = 0;
                foreach ($map['IndexJobInfoList'] as $item) {
                    $model->indexJobInfoList[$n++] = null !== $item ? indexJobInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
