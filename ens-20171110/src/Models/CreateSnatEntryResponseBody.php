<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSnatEntryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 018EED6A-69CA-58C8-A345-498927D5D34E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-5tc08qfj5ecblfdn2rqr9****
     *
     * @var string
     */
    public $snatEntryId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'snatEntryId' => 'SnatEntryId',
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
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnatEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }

        return $model;
    }
}
