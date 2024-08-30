<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\GetIntlFixPriceDomainListUrlResponseBody\module;
use AlibabaCloud\Tea\Model;

class GetIntlFixPriceDomainListUrlResponseBody extends Model
{
    /**
     * @var module
     */
    public $module;

    /**
     * @example BF014B60-C708-4253-B5F2-3F9B493F398B
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
     * @return GetIntlFixPriceDomainListUrlResponseBody
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
