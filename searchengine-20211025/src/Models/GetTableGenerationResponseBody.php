<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableGenerationResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetTableGenerationResponseBody extends Model
{
    /**
     * @description requestId
     *
     * @example E7B7D598-B080-5C8E-AA35-D43EC0D5F886
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result returned.
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result' => 'result',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableGenerationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        return $model;
    }
}
