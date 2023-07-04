<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateSnatEntryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2315DEB7-5E92-423A-91F7-4C1EC9AD97C3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-kmd6nv8fy****
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
