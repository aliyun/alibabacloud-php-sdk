<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetKmsInstanceRequest extends Model
{
    /**
     * @description The ID of the KMS instance that you want to query.
     *
     * @example kst-bjj62f5ba3dnpb6v8****
     *
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKmsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
