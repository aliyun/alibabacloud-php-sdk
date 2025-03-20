<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetCnameFlatteningResponseBody extends Model
{
    /**
     * @description The CNAME flattening mode. Valid values:
     *
     *   flatten_all: flattens all CNAMEs.
     *   flatten_all (default): flattens only the root domain.
     *
     * @example flatten_all
     *
     * @var string
     */
    public $flattenMode;

    /**
     * @description The request ID.
     *
     * @example F61CDR30-E83C-4FDA-BF73-9A94CDD44229
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flattenMode' => 'FlattenMode',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->flattenMode) {
            $res['FlattenMode'] = $this->flattenMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCnameFlatteningResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlattenMode'])) {
            $model->flattenMode = $map['FlattenMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
