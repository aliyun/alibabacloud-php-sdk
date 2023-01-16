<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectTextAnomalyResponseBody extends Model
{
    /**
     * @example 91AC8C98-0F36-49D2-8290-742E24DF*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example pass
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'requestId'  => 'RequestId',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectTextAnomalyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
