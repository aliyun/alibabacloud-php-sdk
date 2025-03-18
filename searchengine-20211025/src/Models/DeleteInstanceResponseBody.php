<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceResponseBody extends Model
{
    /**
     * @description The ID of the request
     *
     * @example E45380E8-994A-5402-9806-F114B3295FCF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result returned
     *
     * @example {}
     *
     * @var mixed[]
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
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
