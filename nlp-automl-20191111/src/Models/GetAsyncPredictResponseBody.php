<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncPredictResponseBody extends Model
{
    /**
     * @var int
     */
    public $asyncPredictId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'asyncPredictId' => 'AsyncPredictId',
        'content'        => 'Content',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncPredictId) {
            $res['AsyncPredictId'] = $this->asyncPredictId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncPredictResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncPredictId'])) {
            $model->asyncPredictId = $map['AsyncPredictId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
