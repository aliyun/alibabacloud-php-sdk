<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class GetDIDResponseBody extends Model
{
    /**
     * @example "{\\"creator\\":\\"did:mychain:xxx\\",\\"created\\":\\"2020-05-22T13:59:49+0800\\",\\"service\\":[],\\"index\\":[],\\"id\\":\\"did:mychain:xxx\\",\\"publicKey\\":[{\\"controller\\":\\"did:mychain:xxx\\",\\"id\\":\\"keys-1\\",\\"publicKey\\":\\"xxx\\",\\"type\\":\\"Secp256k1VerificationKey2018\\"}],\\"type\\":\\"Corporate\\",\\"@context\\":\\"https://w3id.org/did/v1\\",\\"updated\\":\\"2020-05-22T13:59:49+0800\\",\\"version\\":0,\\"authentication\\":[\\"keys-1\\"]}"
     *
     * @var string
     */
    public $doc;

    /**
     * @example "2C93E421-AD9D-4ABE-B519-6E1ACD18934C"
     *
     * @var string
     */
    public $requestId;

    /**
     * @example "OK"
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example ”“
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'doc'           => 'Doc',
        'requestId'     => 'RequestId',
        'resultCode'    => 'ResultCode',
        'resultMessage' => 'ResultMessage',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->doc) {
            $res['Doc'] = $this->doc;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIDResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Doc'])) {
            $model->doc = $map['Doc'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
