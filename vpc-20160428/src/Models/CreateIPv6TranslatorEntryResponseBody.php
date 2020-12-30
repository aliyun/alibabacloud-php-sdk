<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ipv6TranslatorEntryId;
    protected $_name = [
        'requestId'             => 'RequestId',
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
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
        if (null !== $this->ipv6TranslatorEntryId) {
            $res['Ipv6TranslatorEntryId'] = $this->ipv6TranslatorEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIPv6TranslatorEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ipv6TranslatorEntryId'])) {
            $model->ipv6TranslatorEntryId = $map['Ipv6TranslatorEntryId'];
        }

        return $model;
    }
}
