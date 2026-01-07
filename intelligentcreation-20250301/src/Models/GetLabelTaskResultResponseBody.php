<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20250301\Models;

use AlibabaCloud\Dara\Model;

class GetLabelTaskResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultDataUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tokens;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultDataUrl' => 'ResultDataUrl',
        'status' => 'Status',
        'tokens' => 'Tokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultDataUrl) {
            $res['ResultDataUrl'] = $this->resultDataUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tokens) {
            $res['Tokens'] = $this->tokens;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultDataUrl'])) {
            $model->resultDataUrl = $map['ResultDataUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tokens'])) {
            $model->tokens = $map['Tokens'];
        }

        return $model;
    }
}
