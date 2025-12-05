<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class ConnectKmsInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $KMProvider;

    /**
     * @var string
     */
    public $kmsInstanceId;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'KMProvider' => 'KMProvider',
        'kmsInstanceId' => 'KmsInstanceId',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KMProvider) {
            $res['KMProvider'] = $this->KMProvider;
        }

        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
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
        if (isset($map['KMProvider'])) {
            $model->KMProvider = $map['KMProvider'];
        }

        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
