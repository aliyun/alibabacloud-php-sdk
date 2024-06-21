<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskResponseBody\result;
use AlibabaCloud\Tea\Model;

class CreateDocumentAnalyzeTaskResponseBody extends Model
{
    /**
     * @var int
     */
    public $latency;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;
    protected $_name = [
        'latency'   => 'latency',
        'requestId' => 'request_id',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latency) {
            $res['latency'] = $this->latency;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDocumentAnalyzeTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['latency'])) {
            $model->latency = $map['latency'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        return $model;
    }
}
