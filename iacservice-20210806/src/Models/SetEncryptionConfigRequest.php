<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class SetEncryptionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var string
     */
    public $kmsRegionId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'kmsKeyId' => 'kmsKeyId',
        'kmsRegionId' => 'kmsRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->kmsKeyId) {
            $res['kmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->kmsRegionId) {
            $res['kmsRegionId'] = $this->kmsRegionId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['kmsKeyId'])) {
            $model->kmsKeyId = $map['kmsKeyId'];
        }

        if (isset($map['kmsRegionId'])) {
            $model->kmsRegionId = $map['kmsRegionId'];
        }

        return $model;
    }
}
