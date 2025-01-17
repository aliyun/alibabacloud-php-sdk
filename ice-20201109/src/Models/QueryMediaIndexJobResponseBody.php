<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobResponseBody\indexJobInfoList;

class QueryMediaIndexJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var indexJobInfoList[]
     */
    public $indexJobInfoList;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->indexJobInfoList)) {
            Model::validateArray($this->indexJobInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->indexJobInfoList) {
            if (\is_array($this->indexJobInfoList)) {
                $res['IndexJobInfoList'] = [];
                $n1                      = 0;
                foreach ($this->indexJobInfoList as $item1) {
                    $res['IndexJobInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IndexJobInfoList'])) {
            if (!empty($map['IndexJobInfoList'])) {
                $model->indexJobInfoList = [];
                $n1                      = 0;
                foreach ($map['IndexJobInfoList'] as $item1) {
                    $model->indexJobInfoList[$n1++] = indexJobInfoList::fromMap($item1);
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
