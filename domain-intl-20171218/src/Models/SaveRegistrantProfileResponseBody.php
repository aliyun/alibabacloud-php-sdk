<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveRegistrantProfileResponseBody extends Model
{
    /**
     * @example 12380891
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example A9C35C47-3366-482E-B872-8C9EA4733FE9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registrantProfileId' => 'RegistrantProfileId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveRegistrantProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
