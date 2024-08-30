<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\CheckIntlFixPriceDomainStatusResponseBody\module;
use AlibabaCloud\Tea\Model;

class CheckIntlFixPriceDomainStatusResponseBody extends Model
{
    /**
     * @var module
     */
    public $module;

    /**
     * @example 40F46D3D-F4F3-4CCB-AC30-2DD20E32E528
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
     * @return CheckIntlFixPriceDomainStatusResponseBody
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
