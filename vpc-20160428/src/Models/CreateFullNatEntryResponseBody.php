<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateFullNatEntryResponseBody extends Model
{
    /**
     * @description The ID of the FULLNAT entry.
     *
     * @example fullnat-gw8fz23jezpbblf1j****
     *
     * @var string
     */
    public $fullNatEntryId;

    /**
     * @description The ID of the request.
     *
     * @example 2315DEB7-5E92-423A-91F7-4C1EC9AD97C3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fullNatEntryId' => 'FullNatEntryId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullNatEntryId) {
            $res['FullNatEntryId'] = $this->fullNatEntryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFullNatEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullNatEntryId'])) {
            $model->fullNatEntryId = $map['FullNatEntryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
