<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118\Models;

use AlibabaCloud\Tea\Model;

class ExtractPhoneResponseBody extends Model
{
    /**
     * @example {"phone_extract":[{"start":8,"end":19,"type":"TEL","word":"1333333****"}],"time_used":{"rt":{"phone_extract":"0.014524221420288086"},"start":"1589800189.9369104"},"status":"OK"}
     *
     * @var string
     */
    public $data;

    /**
     * @description RequestId
     *
     * @example A602539D-A298-4643-A268-94F0B893C12F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractPhoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
