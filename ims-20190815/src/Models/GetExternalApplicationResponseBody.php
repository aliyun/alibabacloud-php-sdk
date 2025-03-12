<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetExternalApplicationResponseBody\externalApplication;
use AlibabaCloud\Tea\Model;

class GetExternalApplicationResponseBody extends Model
{
    /**
     * @description The information about the external application.
     *
     * @var externalApplication
     */
    public $externalApplication;

    /**
     * @description The request ID.
     *
     * @example E4C4D1BD-2558-5BD1-8C36-A5D7FB174A55
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'externalApplication' => 'ExternalApplication',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalApplication) {
            $res['ExternalApplication'] = null !== $this->externalApplication ? $this->externalApplication->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExternalApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalApplication'])) {
            $model->externalApplication = externalApplication::fromMap($map['ExternalApplication']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
