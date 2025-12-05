<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class ReleaseKmsInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $forceDeleteWithoutBackup;

    /**
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'forceDeleteWithoutBackup' => 'ForceDeleteWithoutBackup',
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
