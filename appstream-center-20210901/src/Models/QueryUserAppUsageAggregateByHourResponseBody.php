<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserAppUsageAggregateByHourResponseBody\indexData;

class QueryUserAppUsageAggregateByHourResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var indexData[]
     */
    public $indexData;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'indexData' => 'IndexData',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->indexData)) {
            Model::validateArray($this->indexData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->indexData) {
            if (\is_array($this->indexData)) {
                $res['IndexData'] = [];
                $n1 = 0;
                foreach ($this->indexData as $item1) {
                    $res['IndexData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['IndexData'])) {
            if (!empty($map['IndexData'])) {
                $model->indexData = [];
                $n1 = 0;
                foreach ($map['IndexData'] as $item1) {
                    $model->indexData[$n1] = indexData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
