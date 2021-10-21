<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GenerateQrCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $qrcodeUrl;

    /**
     * @var string
     */
    public $fieldKey;
    protected $_name = [
        'uuid'       => 'Uuid',
        'requestId'  => 'RequestId',
        'expireTime' => 'ExpireTime',
        'success'    => 'Success',
        'qrcodeUrl'  => 'QrcodeUrl',
        'fieldKey'   => 'FieldKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->qrcodeUrl) {
            $res['QrcodeUrl'] = $this->qrcodeUrl;
        }
        if (null !== $this->fieldKey) {
            $res['FieldKey'] = $this->fieldKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateQrCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['QrcodeUrl'])) {
            $model->qrcodeUrl = $map['QrcodeUrl'];
        }
        if (isset($map['FieldKey'])) {
            $model->fieldKey = $map['FieldKey'];
        }

        return $model;
    }
}
