<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteClientKeyRequest extends Model
{
    /**
     * @example KAAP.66abf237-63f6-4625-b8cf-47e1086e****
     *
     * @var string
     */
    public $clientKeyId;
    protected $_name = [
        'clientKeyId' => 'ClientKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientKeyId) {
            $res['ClientKeyId'] = $this->clientKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClientKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientKeyId'])) {
            $model->clientKeyId = $map['ClientKeyId'];
        }

        return $model;
    }
}
