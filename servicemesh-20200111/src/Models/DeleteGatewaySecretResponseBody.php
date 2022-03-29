<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewaySecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SecretDeleteRecordValue[]
     */
    public $secretDeleteRecord;
    protected $_name = [
        'requestId'          => 'RequestId',
        'secretDeleteRecord' => 'SecretDeleteRecord',
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
        if (null !== $this->secretDeleteRecord) {
            $res['SecretDeleteRecord'] = [];
            if (null !== $this->secretDeleteRecord && \is_array($this->secretDeleteRecord)) {
                foreach ($this->secretDeleteRecord as $key => $val) {
                    $res['SecretDeleteRecord'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewaySecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretDeleteRecord'])) {
            $model->secretDeleteRecord = $map['SecretDeleteRecord'];
        }

        return $model;
    }
}
