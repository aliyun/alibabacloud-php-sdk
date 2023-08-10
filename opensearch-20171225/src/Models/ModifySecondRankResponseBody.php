<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankResponseBody\result;
use AlibabaCloud\Tea\Model;

class ModifySecondRankResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C5E2F73C-8241-81F8-3A62-65478C5A3111
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the fine sort expression.
     *
     * @example {}
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

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
     * @return ModifySecondRankResponseBody
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
