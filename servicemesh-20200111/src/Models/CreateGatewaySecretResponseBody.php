<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewaySecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SecretCreateRecordValue[]
     */
    public $secretCreateRecord;
    protected $_name = [
        'requestId'          => 'RequestId',
        'secretCreateRecord' => 'SecretCreateRecord',
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
        if (null !== $this->secretCreateRecord) {
            $res['SecretCreateRecord'] = [];
            if (null !== $this->secretCreateRecord && \is_array($this->secretCreateRecord)) {
                foreach ($this->secretCreateRecord as $key => $val) {
                    $res['SecretCreateRecord'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewaySecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretCreateRecord'])) {
            $model->secretCreateRecord = $map['SecretCreateRecord'];
        }

        return $model;
    }
}
