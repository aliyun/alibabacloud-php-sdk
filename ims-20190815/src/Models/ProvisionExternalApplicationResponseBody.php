<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationResponseBody\externalApplication;
use AlibabaCloud\Tea\Model;

class ProvisionExternalApplicationResponseBody extends Model
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
     * @example 55535873-9A6B-5C87-853F-C7CD258826F2
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
     * @return ProvisionExternalApplicationResponseBody
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
