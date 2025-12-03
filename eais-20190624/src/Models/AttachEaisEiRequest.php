<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Dara\Model;

class AttachEaisEiRequest extends Model
{
    /**
     * @var string
     */
    public $clientInstanceId;

    /**
     * @var string
     */
    public $eiInstanceId;

    /**
     * @var string
     */
    public $eiInstanceType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientInstanceId' => 'ClientInstanceId',
        'eiInstanceId' => 'EiInstanceId',
        'eiInstanceType' => 'EiInstanceType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientInstanceId) {
            $res['ClientInstanceId'] = $this->clientInstanceId;
        }

        if (null !== $this->eiInstanceId) {
            $res['EiInstanceId'] = $this->eiInstanceId;
        }

        if (null !== $this->eiInstanceType) {
            $res['EiInstanceType'] = $this->eiInstanceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientInstanceId'])) {
            $model->clientInstanceId = $map['ClientInstanceId'];
        }

        if (isset($map['EiInstanceId'])) {
            $model->eiInstanceId = $map['EiInstanceId'];
        }

        if (isset($map['EiInstanceType'])) {
            $model->eiInstanceType = $map['EiInstanceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
