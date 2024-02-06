<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateForwardEntryResponseBody extends Model
{
    /**
     * @description The ID of the DNAT entry.
     *
     * @example fwd-5tc07cw14metghn3siv4ak8do
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description The ID of the request.
     *
     * @example EF6D6FA4-DACA-5822-A981-81006271D263
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardEntryId' => 'ForwardEntryId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateForwardEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
