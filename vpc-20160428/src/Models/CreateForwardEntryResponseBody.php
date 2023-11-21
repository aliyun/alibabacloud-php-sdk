<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateForwardEntryResponseBody extends Model
{
    /**
     * @description The ID of the DNAT entry.
     *
     * @example fwd-119smw5tkasdf****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description The request ID.
     *
     * @example A4AEE536-A97A-40EB-9EBE-53A6948A6928
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
