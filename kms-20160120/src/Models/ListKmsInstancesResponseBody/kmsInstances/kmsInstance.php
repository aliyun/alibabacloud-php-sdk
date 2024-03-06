<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody\kmsInstances;

use AlibabaCloud\Tea\Model;

class kmsInstance extends Model
{
    /**
     * @description The ARN of the KMS instance.
     *
     * @example acs:kms:pre-hangzhou:120708975881****:keystore/kst-phzz64c9f84eo32dbs****
     *
     * @var string
     */
    public $kmsInstanceArn;

    /**
     * @description The ID of the KMS instance.
     *
     * @example kst-phzz64c9f84eo32dbs****
     *
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'kmsInstanceArn' => 'KmsInstanceArn',
        'kmsInstanceId'  => 'KmsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsInstanceArn) {
            $res['KmsInstanceArn'] = $this->kmsInstanceArn;
        }
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kmsInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsInstanceArn'])) {
            $model->kmsInstanceArn = $map['KmsInstanceArn'];
        }
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
