<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SasInstallCodeResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example B256A525-7E42-4BB9-A27C-9017FDDFF1A2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The installation verification code that is used to run the installation command when you manually install the Security Center agent.
     *
     * @example eDkhGP
     *
     * @var string
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'data',
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
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SasInstallCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        return $model;
    }
}
