<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrSentenceRequest\asrRequest;
use AlibabaCloud\Tea\Model;

class AsrSentenceRequest extends Model
{
    /**
     * @var asrRequest
     */
    public $asrRequest;
    protected $_name = [
        'asrRequest' => 'AsrRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrRequest) {
            $res['AsrRequest'] = null !== $this->asrRequest ? $this->asrRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsrSentenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrRequest'])) {
            $model->asrRequest = asrRequest::fromMap($map['AsrRequest']);
        }

        return $model;
    }
}
