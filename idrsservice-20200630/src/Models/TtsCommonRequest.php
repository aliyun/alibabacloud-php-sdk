<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsCommonRequest\ttsRequest;
use AlibabaCloud\Tea\Model;

class TtsCommonRequest extends Model
{
    /**
     * @var ttsRequest
     */
    public $ttsRequest;
    protected $_name = [
        'ttsRequest' => 'TtsRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ttsRequest) {
            $res['TtsRequest'] = null !== $this->ttsRequest ? $this->ttsRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TtsCommonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TtsRequest'])) {
            $model->ttsRequest = ttsRequest::fromMap($map['TtsRequest']);
        }

        return $model;
    }
}
