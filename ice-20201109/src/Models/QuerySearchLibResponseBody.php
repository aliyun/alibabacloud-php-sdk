<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchLibResponseBody\indexInfo;

class QuerySearchLibResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var indexInfo[]
     */
    public $indexInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $searchLibName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'indexInfo'     => 'IndexInfo',
        'requestId'     => 'RequestId',
        'searchLibName' => 'SearchLibName',
        'status'        => 'Status',
        'success'       => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->indexInfo)) {
            Model::validateArray($this->indexInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->indexInfo) {
            if (\is_array($this->indexInfo)) {
                $res['IndexInfo'] = [];
                $n1               = 0;
                foreach ($this->indexInfo as $item1) {
                    $res['IndexInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['IndexInfo'])) {
            if (!empty($map['IndexInfo'])) {
                $model->indexInfo = [];
                $n1               = 0;
                foreach ($map['IndexInfo'] as $item1) {
                    $model->indexInfo[$n1++] = indexInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
