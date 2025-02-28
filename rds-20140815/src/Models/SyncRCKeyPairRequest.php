<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class SyncRCKeyPairRequest extends Model
{
    /**
     * @var string
     */
    public $keyPairName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var bool
     */
    public $syncMode;
    protected $_name = [
        'keyPairName' => 'KeyPairName',
        'regionId'    => 'RegionId',
        'syncMode'    => 'SyncMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
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
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }

        return $model;
    }
}
