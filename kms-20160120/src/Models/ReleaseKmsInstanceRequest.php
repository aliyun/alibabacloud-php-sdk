<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ReleaseKmsInstanceRequest extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $forceDeleteWithoutBackup;

    /**
     * @description This parameter is required.
     *
     * @example kst-hzz6****
     *
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'forceDeleteWithoutBackup' => 'ForceDeleteWithoutBackup',
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDeleteWithoutBackup) {
            $res['ForceDeleteWithoutBackup'] = $this->forceDeleteWithoutBackup;
        }
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseKmsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceDeleteWithoutBackup'])) {
            $model->forceDeleteWithoutBackup = $map['ForceDeleteWithoutBackup'];
        }
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
