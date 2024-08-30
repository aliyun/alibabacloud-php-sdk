<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryIntlFixedPriceOrderListResponseBody\module;
use AlibabaCloud\Tea\Model;

class QueryIntlFixedPriceOrderListResponseBody extends Model
{
    /**
     * @var module
     */
    public $module;

    /**
     * @example D6CB3623-4726-4947-AC2B-2C6E673B447C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'module'    => 'Module',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = null !== $this->module ? $this->module->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIntlFixedPriceOrderListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            $model->module = module::fromMap($map['Module']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
